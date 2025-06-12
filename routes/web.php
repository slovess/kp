<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\Admin\GoodController;

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('goods', GoodController::class);
});
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/logout', [ProfileController::class, 'logout'])->name('logout');
});


Route::get('/goods/{id}', [GoodsController::class, 'show'])->name('goods.show');
Route::post('/goods/{id}/{userId}', [BasketController::class, 'store'])->name('cart.add');

Route::get('/register', [RegisterController::class, 'index'])->name('registerForm');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');

Route::get('/categori', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/cart', [BasketController::class, 'index'])->name('cart.index');
Route::delete('/cart/{id}', [BasketController::class, 'destroy'])->name('cart.remove');
Route::patch('/cart/{cart}', [BasketController::class, 'update'])->name('cart.update');
Route::post('/cart/store', [\App\Http\Controllers\BasketController::class, 'store'])->name('cart.store');

Route::get('/categori/{id}', [CategoryController::class, 'show'])->name('categories.show');

Route::middleware(['auth'])->group(function () {
   
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
});

