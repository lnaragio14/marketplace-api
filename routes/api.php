<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

Route::get('/test', function () {
    return response()->json(['ok' => true]);
});

Route::apiResource('products', ProductController::class);