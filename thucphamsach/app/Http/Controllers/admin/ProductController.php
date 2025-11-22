<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;


class ProductController extends Controller
{
   public function index()
    {
        $products = Product::all();
        return view('admin.product.product-list', compact('products'));
    }
}
