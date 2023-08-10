<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', [
            'products' => Product::paginate(10)
        ]);
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        $proveedors = Proveedor::orderBy('name')->get();
        return view('products.create', compact('categories', 'proveedors'));

    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'category_id' => 'required|integer',
            'proveedor_id' => 'required|integer',
        ]);

        Product::create($data);
        return back()->with('message', 'product created');
    }
    public function edit(Product $product)
    {
        $categories = Category::orderBy('name')->get();
        $proveedors = Proveedor::orderBy('name')->get();
        return view('products.create', compact('categories', 'proveedors'));

    }
    public function update(Products $product, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|regex::/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'category_id' => 'rquired|integer',
            'proveedor_id' => 'required|integer',

        ]);
        $product->update($data);
        return back()->with('message', 'Product updated.');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('message', 'Product deleted.');
    }
}
