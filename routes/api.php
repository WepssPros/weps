<?php


use App\Http\Controllers\API\ProductCategoryController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\ProductVendorController;
use App\Http\Controllers\API\TransactionController;
use App\Http\Controllers\API\UserController;
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

Route::middleware('auth:sanctum')->group(function() {
    route::get('user',[UserController::class, 'fetch']);
    route::post('user',[UserController::class, 'updateProfile']);
    route::post('logout',[UserController::class, 'logout']);


    route::get('transactions', [TransactionController::class,'all']);
    route::post('checkout', [TransactionController::class,'checkout']);
});

Route::get('products',[ProductController::class,'all']);
Route::get('categories',[ProductCategoryController::class,'all']);
Route::get('vendors',[ProductVendorController::class,'all']);

Route::post('register',[UserController::class,'register']);
Route::post('login',[UserController::class,'login']);



