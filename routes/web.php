<?php

declare(strict_types=1);

use App\Http\Controllers\ArticleDisplayController;
use App\Http\Controllers\ChurchDisplayController;
use App\Http\Controllers\PageDisplayController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/churches/{slug}', [ChurchDisplayController::class, 'show'])->name('frontend.church');
Route::get('/churches/', [ChurchDisplayController::class, 'list'])->name('frontend.church.list');

Route::get('/articles/{slug}', [ArticleDisplayController::class, 'show'])->name('frontend.article');
Route::get('/articles/', [ArticleDisplayController::class, 'list'])->name('frontend.article.list');

Route::get('{slug}', [PageDisplayController::class, 'show'])->name('frontend.page');
Route::get('/', [PageDisplayController::class, 'home'])->name('frontend.home');
