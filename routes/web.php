<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowDataController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;

Route::get('/', [ShowDataController::class, 'index']);
// Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
// Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
// Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');
// Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
