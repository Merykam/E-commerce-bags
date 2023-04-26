<?php

use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\ProductColor;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product/{id}', [App\Http\Controllers\WelcomeController::class, 'showProduct'])->name('item');

Route::resource('category', CategoryController::class);
Route::resource('products', ProductController::class);
Route::get('/admin',[AdminController::class,'index'] );

Route::post('/addToCart/{id}',[AddToCartController::class,'addToCart'])->name('addToCart');
Route::delete('/cart/{index}', [AddToCartController::class,'delete'])->name('cart.delete');
Route::put('/cart/{index}', [AddToCartController::class,'update'])->name('cart.update');

Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');
Route::post('/store', [App\Http\Controllers\CheckoutController::class, 'store'])->name('store');

// adminRoutes

Route::get('/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('editProfile');
Route::post('profile/{user}',[AdminController::class,'update'])->name('profile.update');