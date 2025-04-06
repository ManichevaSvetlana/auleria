<?php

use Illuminate\Support\Facades\Route;

Route::get('/api/get-test-orders', [\App\Http\Controllers\OrderController::class, 'testOrders']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/board-of-destiny', function () {
    return view('board');
});

Route::get('/product/body-amulets', function () {
    return view('amulets');
});

Route::get('/request', function () {
    return view('form');
});

Route::post('/order-submit', [\App\Http\Controllers\OrderController::class, 'submit'])->name('order.submit');


