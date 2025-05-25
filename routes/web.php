<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShowDataController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ShowDataController::class, 'index']);
Route::get('/pages/{kategori}', [ProductController::class, 'show']);
