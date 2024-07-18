<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin'])->name('AdminDashboard');

Route::get('/',[HomeController::class,'home'])->name('home');

Route::get('/view_category',[AdminController::class,'view_category'])->name('view_category')->middleware(['auth','admin']);

Route::get('/add_product',[AdminController::class,'add_product'])->name('add_product')->middleware(['auth','admin']);

Route::get('/edit_category/{id}',[AdminController::class,'edit_category'])->name('edit_category')->middleware(['auth','admin']);

Route::get('/view_products',[AdminController::class,'view_products'])->name('view_products')->middleware(['auth','admin']);

Route::post('/add_category',[AdminController::class,'add_category'])->name('add_category');

Route::delete('/view_category/{id}',[AdminController::class,'delete_category'])->name('destroy');

Route::post('/add_product',[AdminController::class,'insert_product'])->name('insert_product');
