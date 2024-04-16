<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/product',[ProductController::class,'index'])->name('product.index');
route::get('/product/create',[ProductController::class,'create'])->name('product.create');
route::post('/product',[ProductController::class,'store'])->name('product.store');
route::get('/product/{product}/edit',[ProductController::class,'edit'])->name('product.edit');
route::put('/product/{product}/update',[ProductController::class,'update'])->name('product.update');
