<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [AppController::class, 'index']);

Route::get('/items', [ItemController::class, 'items']);

Route::get('/order', [OrderController::class, 'order']);


