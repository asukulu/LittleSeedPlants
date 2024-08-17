<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;

//Route::get('/', function () {
    //return view('landing');
    //return view('home');
//});

// Route for landing page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Routes for plants
//Route::get('/', [PlantController::class, 'index'])->name('home');
Route::get('/plants', [PlantController::class, 'index'])->name('plants.index');
Route::get('/plants/{slug}', [PlantController::class, 'show'])->name('plants.show');

// Routes for categories
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

//Routes for the cart

Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::get('/remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('remove.from.cart');
Route::patch('/update-cart', [CartController::class, 'updateCart'])->name('update.cart');


//Routes for the Wishlists

Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
Route::post('/wishlist/{id}', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
Route::delete('/wishlist/{id}', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');


Route::resource('reviews', ReviewController::class);

Auth::routes();