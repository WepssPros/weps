<?php

use App\Http\Controllers\Admin\CalonVendorsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductGalleryController;
use App\Http\Controllers\Admin\ProductVendorController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VendorGalleryController;
use App\Http\Controllers\Frontend\FrontEndController;
use App\Http\Controllers\Frontend\PatnersController;
use App\Http\Controllers\Frontend\RecomendationController;
use App\Http\Controllers\Frontend\RegistrationVendorController;
use App\Http\Controllers\Vendorss\VendorDashboardController;
use App\Http\Controllers\Vendorss\VendorProductController;
use App\Http\Controllers\Vendorss\VendorProductGalleryController;
use App\Http\Controllers\Vendorss\VendorTransactionController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Tampilan Route Front End
Route::get('/', [FrontEndController::class, 'index'])->name('index');
Route::get('patners', [PatnersController::class, 'index'])->name('index');
Route::get('recomendations', [RecomendationController::class, 'index'])->name('index');
Route::get('registervendor', [RegistrationVendorController::class, 'index'])->name('index');
Route::post('/store', [RegistrationVendorController::class, 'store'])->name('store');
// Tarok disini Rehan


// Tampilan Web Admin
Route::group(['middleware' => ['auth:sanctum', 'verified', 'admin']], function () {

    Route::name('dashboard.')->prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');

        Route::middleware(['admin'])->group(function () {
            Route::resource('product', ProductController::class);
            Route::resource('category', ProductCategoryController::class);
            Route::resource('product.gallery', ProductGalleryController::class)->shallow()->only([
                'index', 'create', 'store', 'destroy'
            ]);
            Route::resource('vendors.gallery', VendorGalleryController::class)->shallow()->only([
                'index', 'create', 'store', 'destroy'
            ]);
            Route::resource('vendor', ProductVendorController::class)->shallow()->only([
                'index','edit','update','store','destroy','create','show',
            ]);

            Route::resource('transaction', TransactionController::class)->only([
                'index', 'show', 'edit', 'update'
            ]);
            Route::resource('calonvendor', CalonVendorsController::class)->only([
                'index','store','show', 'edit', 'update','show','destroy'
            ]);
            Route::resource('user', UserController::class)->only([
                'index', 'edit', 'update', 'destroy'
            ]);
        });
    });
});
// Tarok Sini Rehan





// Tampilan Web Vendor
Route::group(['middleware' => ['auth:sanctum', 'verified', 'vendor']], function () {

    Route::name('dashboard.vendors.')->prefix('dashboard.vendors')->group(function () {
        Route::get('/', [VendorDashboardController::class, 'index'])->name('index');

        Route::middleware(['vendor'])->group(function () {
            Route::resource('product', VendorProductController::class);
            // Route::resource('category', VendorProductCategoryController::class);
            Route::resource('product.gallery', VendorProductGalleryController::class)->shallow()->only([
                'index', 'create', 'store', 'destroy'
            ]);
            // Route::resource('vendor', VendorProductVendorController::class)->shallow()->only([
            //     'index','edit','update','store','destroy','create'
            // ]);

            Route::resource('transaction', VendorTransactionController::class)->only([
                'index', 'show', 'edit', 'update'
            ]);
            Route::resource('user', UserController::class)->only([
                'index', 'edit', 'update', 'destroy'
            ]);
        });
    });
});
// Tarok di sini Rehan

