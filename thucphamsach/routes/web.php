<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/page', function () {
    return view('page');
});
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');
///////////////////////////////////////////
Route::get('/admin/category', function () {
    return view('admin/category/category-list');
})->name('category');

Route::get('/admin/product', function () {
    return view('admin/product/product-list');
})->name('product');
Route::get('/admin', function () {
    return view('admin');
})->name('admin');