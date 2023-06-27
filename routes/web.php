<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('homePage');
});

Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'index')->name('profilePage');
    Route::get('/profile/edit', 'edit')->name('editProfile');
    Route::patch('/profile/update', 'update')->name('updateProfile');
    // Route::post('/product/store', 'store')->name('storeProduct');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'loginIndex')->name('loginPage');
    Route::get('/register', 'registerIndex')->name('registerPage');
    Route::post('/login', 'login')->name('postLogin');
    Route::post('/register', 'register')->name('postRegister');
    Route::post('/logout', 'logout')->name('postLogout')->middleware('auth');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/product/{categorySlug}/{productSlug}', 'show')->name('showProduct');
    // Route::get('/product/create', 'create')->name('createProduct');
    // Route::post('/product/store', 'store')->name('storeProduct');
});

Route::controller(StoreController::class)->group(function () {
    Route::get('/store', 'index')->name('storePage');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/category', 'index')->name('categoryPage');
    Route::get('/category/{slug}', 'show')->name('showCategory');
    // Route::get('/category/create', 'create')->name('createCategory');
    // Route::post('/category/store', 'store')->name('storeCategory');
});

Route::controller(SearchController::class)->group(function () {
    Route::get('/search', 'index')->name('searchPage');
});

Route::controller(CartController::class)->group(function () {
    Route::get('/cart', 'index')->name('cartPage');
    Route::post('/cart/store', 'store')->name('storeCart');
    Route::delete('/cart/delete', 'delete')->name('deleteCart');
});

Route::controller(CheckoutController::class)->group(function () {
    Route::get('/checkout', 'index')->name('checkoutPage');
});