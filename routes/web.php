<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [PlantController::class, 'index'])->name('home');
Route::get('/plants/{slug}', [PlantController::class, 'show'])->name('plants.show');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');


Route::get('/plants', [PlantController::class, 'index'])->name('plants.index');
