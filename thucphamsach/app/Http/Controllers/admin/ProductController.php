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

    public function create()
    {
        return view('admin.product.add');
    }

    public function store(Request $request)
    {
        $product = Product::create(
            [
                'name' => $request->name,
            ]
        );
        
        if($product)
         
            return redirect()->route('admin.product.index')->with('success', 'Thêm sản phẩm thành công!');
        else{
            return back()->with('error', 'Thêm sản phẩm thất bại.');
        }
    }

    public function show(string $id)
    {
        // ...
    }

    public function edit(string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('admin.product.index')->with('error', 'Sản phẩm không tồn tại.');
        }

        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return back()->with('error', 'Không tìm thấy sản phẩm cần cập nhật.');
        }

        $product->update([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.product.index')->with('success', 'Cập nhật sản phẩm thành công!');
    }

    public function destroy(string $id)
    {
        $product = Product::find($id);
        
        if ($product) {
            $product->delete();
      
            return redirect()->route('admin.product.index')->with('success', 'Xóa sản phẩm thành công!');
        } else {
            return back()->with('error', 'Sản phẩm không tồn tại.');
        }
    }
}