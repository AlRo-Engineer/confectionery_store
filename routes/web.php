<?php

use App\Http\Controllers\CareersController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', 'App\Http\Controllers\AboutUsController@index');

Route::get('/careers', 'App\Http\Controllers\CareersController@index');
Route::post('/', [CareersController::class, 'submitForm']);

Route::get('/cakes', [ProductController::class, 'showCakes']);

Route::get('/pastries', [ProductController::class, 'showPastries']);

Route::get('/candy-bars', [ProductController::class, 'showCandyBars']);

Route::get('/candy-sets', [ProductController::class, 'showCandySets']);

Route::get('cart', [OrderController::class, 'showCart'])->name('cart.show');
Route::get('add-to-cart/{id}', [OrderController::class, 'addToCart'])->name('add.to.cart');

Route::get('/remove-from-cart/{id}', [OrderController::class, 'removeFromCart'])->name('remove.from.cart');

Route::get('checkout', [OrderController::class, 'showCheckoutForm'])->name('checkout.show');
Route::post('checkout', [OrderController::class, 'checkout'])->name('checkout.process');
Route::get('order/confirmation/{orderId}', [OrderController::class, 'orderConfirmation'])->name('confirmation');

Route::post('checkout/submit', [OrderController::class, 'processCheckout'])->name('order.submit');










