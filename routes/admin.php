<?php

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\StatsController;
use Illuminate\Support\Facades\Route;

Route::prefix('stats')->group(function (){
    Route::get('orders-count', [StatsController::class, 'orderCount']);
    Route::get('orders-sales-sum', [StatsController::class, 'orderSalesSum']);
    Route::get('delivery-methods-ratio', [StatsController::class, 'deliveryMethodRatio']);
    Route::get('orders-count-by-day', [StatsController::class, 'orderCountByDays']);
});

Route::apiResource('orders', OrderController::class);
