<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/anime', function () {
    return view('anime');
})->name('anime');