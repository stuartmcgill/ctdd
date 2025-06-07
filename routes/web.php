<?php

use App\Http\Controllers\PageDisplayController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [PageDisplayController::class, 'home'])->name('frontend.home');
Route::get('{slug}', [PageDisplayController::class, 'show'])->name('frontend.page');
