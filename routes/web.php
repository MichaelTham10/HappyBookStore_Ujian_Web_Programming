<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::get('/detail/{id}', [DetailController::class, 'index']);

Route::get('/category/{id}', [CategoryController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

