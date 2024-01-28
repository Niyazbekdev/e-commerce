<?php

use App\Http\Controllers\Admin\AssignRoleController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\Admin\StatsController;
use App\Http\Controllers\AssignPermissionController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::prefix('stats')->group(function (){
    Route::get('orders-count', [StatsController::class, 'orderCount']);
    Route::get('orders-sales-sum', [StatsController::class, 'orderSalesSum']);
    Route::get('delivery-methods-ratio', [StatsController::class, 'deliveryMethodRatio']);
    Route::get('orders-count-by-day', [StatsController::class, 'orderCountByDays']);
});

Route::apiResource('orders', OrderController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('products.images', ProductImageController::class);
Route::apiResource('discounts', DiscountController::class);
Route::apiResource('roles', RoleController::class);
Route::apiResource('assign-roles', AssignRoleController::class);
Route::apiResource('permissions', PermissionController::class);
Route::apiResource('assign-permissions', AssignPermissionController::class);
