<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\DeliveryMethodController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StatusOrderController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\UserPaymentCardController;
use App\Http\Controllers\UserSettingController;
use Illuminate\Support\Facades\Route;

Route::get('products/{product}/related', [ProductController::class, 'related']);

Route::apiResources([
    'categories' => CategoryController::class,
    'products' => ProductController::class,
    'categories.products' => CategoryProductController::class,
    'statuses' => StatusController::class,
    'statuses.orders' => StatusOrderController::class,
    'favorites' => FavoriteController::class,
    'orders' => OrderController::class,
    'delivery-methods' => DeliveryMethodController::class,
    'payment-types' => PaymentTypeController::class,
    'user-addresses' => UserAddressController::class,
    'user-cards' => UserPaymentCardController::class,
    'reviews' => ReviewController::class,
    'products.reviews' => ProductReviewController::class,
    'settings' => SettingController::class,
    'user-settings' => UserSettingController::class
]);
