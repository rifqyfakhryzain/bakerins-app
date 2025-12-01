<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tes', function() {
    return view('tes');
});

Route::get('/products', function() {
    return view('products.index');
} );