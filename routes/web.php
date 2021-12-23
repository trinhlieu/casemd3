<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('changePW',[AdminController::class,'formChangePW'])->name('formChangePW');
        Route::post('changePW',[AdminController::class,'changePW'])->name('changePW');
        Route::get('edit/{id}',[AdminController::class,'edit'])->name('admin.edit');
        Route::post('update/{id}',[AdminController::class,'update'])->name('admin.update');
        Route::get('index',[AdminController::class, 'index'])->name('admin.index');
        Route::prefix('users')->group(function () {
            Route::get('index',[UserController::class,'index'])->name('admin.user.index');
            Route::get('create',[UserController::class,'create'])->name('admin.user.create');
            Route::post('store',[UserController::class,'store'])->name('admin.user.store');
            Route::get('delete/{id}',[UserController::class,'delete'])->name('admin.user.delete');
        });
    });

    Route::prefix('product')->group(function (){
        Route::get('index',[ProductController::class,'index'])->name('product.index');
        Route::get('edit/{id}',[ProductController::class,'edit'])->name('product.edit');
        Route::post('update/{id}',[ProductController::class,'update'])->name('product.update');
        Route::post('delete',[ProductController::class,'delete'])->name('product.delete');
        Route::get('create',[ProductController::class,'create'])->name('product.create');
        Route::post('store',[ProductController::class,'store'])->name('product.store');
        Route::get('/search',[ProductController::class,'search'])->name('product.search');
        Route::get('/filler',[ProductController::class,'fillerByCategory'])->name('product.filler');
    });
    Route::prefix('category')->group(function () {
        Route::get('index',[CategoryController::class,'index'])->name('category.index');
        Route::get('edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
        Route::post('update/{id}',[CategoryController::class,'update'])->name('category.update');
        Route::get('create',[CategoryController::class,'create'])->name('category.create');
        Route::post('store',[CategoryController::class,'store'])->name('category.store');
        Route::get('delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');

    });
    Route::get('logout',[AuthController::class,'logout'])->name('auth.logout');
});

Route::get('/login', function () {
    return view('login');
})->name('showFormLogin');
Route::post('login',[AuthController::class, 'login'])->name('auth.login');
Route::get('/',[HomeController::class, 'home'])->name('layouts.home');
//Route::get('/redirect/{social}', [SocialController::class,'redirect']);
//Route::get('/callback/{social}',[SocialController::class,'callback']);


//Route::get('about', [HomeController::class, 'about'])->name('directional.about');
//Route::get('contact', [HomeController::class, 'contact'])->name('directional.contact');
//Route::get('special', [HomeController::class, 'special'])->name('directional.special');
//Route::get('brand', [HomeController::class, 'brand'])->name('directional.brand');
