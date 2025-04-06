<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/board-of-destiny', function () {
    return view('board');
});

Route::get('/product/body-amulets', function () {
    return view('amulets');
});
