<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WriterController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AppController::class, 'home'])->name('home');

Route::prefix('/category')->group(function(){
    Route::get('/index/{id}', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/detail/{id}/{cd}', [CategoryController::class, 'show'])->name('category.detail');
});

Route::get('/about', [AppController::class, 'about'])->name('about');

Route::prefix('/writers')->group(function(){
    Route::get('/index', [WriterController::class, 'index'])->name('writers.index');
    Route::get('/detail/{w_id}/{c_id}', [WriterController::class, 'show'])->name('writers.detail');
});

Route::get('/popular', [AppController::class, 'popular'])->name('popular');