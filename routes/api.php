<?php

use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\Api\PublicController;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\ImagesController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/authenticate', [AuthController::class,'login']); //api/ prefixed automatically

Route::middleware('auth:sanctum')->group(function() {
    Route::apiResource('/products', ProductsController::class);
    Route::apiResource('/categories', CategoriesController::class)->except(['index', 'show','update']);    
    Route::apiResource('/images', ImagesController::class)->except(['index', 'show','update']);        
});

Route::apiResource('/public', PublicController::class)->except(['delete', 'store','update', 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->post('/logout', function (Request $request) {
    $user = $request->user();
    $user->tokens()->delete();
    Auth::guard('web')->logout();
    return ['status' => 'OK'];
});

