<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;



Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/category1', function () {
    return view('category1');
})->name('category1');
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
Route::get('/single_product', function () {
    return view('single_product');
})->name('single_product');
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Route::get('/login', function () {
//     return view('login');
// })->name('login');

// Route::get('/register', function () {
//     return view('register');
// })->name('register');

// Route::post('/logout', function () {
//     Auth::logout();
//     session()->invalidate();
//     session()->regenerateToken();
//     return redirect('/');
// })->name('logout');



///////////////////////////////////////////
Route::get('/admin/category', [CategoryController::class, 'index'])->name('category');

Route::get('/admin/product', [ProductController::class, 'index'])->name('product');

Route::get('/admin', function () {
    return view('admin/index');
})->name('admin');
Auth::routes();


