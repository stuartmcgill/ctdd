<?php

declare(strict_types=1);

use App\Http\Controllers\ArticleDisplayController;
use App\Http\Controllers\ChurchDisplayController;
use App\Http\Controllers\PageDisplayController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// @TODO - remove this middleware
Route::group([
    'middleware' => function ($request, $next) {
        if (! Auth::guard('twill_users')->check()) {
            abort(403, 'Frontend temporarily restricted to administrators.');
        }

        return $next($request);
    },
], function () {
    Route::get('/churches/{slug}', [ChurchDisplayController::class, 'show'])->name('frontend.church');
    Route::get('/churches/', [ChurchDisplayController::class, 'list'])->name('frontend.church.list');

    Route::get('/articles/{slug}', [ArticleDisplayController::class, 'show'])->name('frontend.article');
    Route::get('/articles/', [ArticleDisplayController::class, 'list'])->name('frontend.article.list');

    Route::get('{slug}', [PageDisplayController::class, 'show'])->name('frontend.page');
    Route::get('/', [PageDisplayController::class, 'home'])->name('frontend.home');
});
