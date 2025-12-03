<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
});

Route::get('/tes', function () {
    return view('tes');
});

Route::get('/products', [ProductController::class, 'index']);
