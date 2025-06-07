<?php

use App\Http\Controllers\PageDisplayController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('{slug}', [PageDisplayController::class, 'show'])->name('frontend.page');
