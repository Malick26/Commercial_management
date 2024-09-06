<?php
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

use App\Modules\Order\Controllers\OrderController;


Route::get('/orders/create', [OrderController::class,'create'])->middleware('web')->name('orders.create');

