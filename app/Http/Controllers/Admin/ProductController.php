<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Product;

use Illuminate\Http\Request;



class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.index', compact('products'));
    }
    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        Product::create($request->all());

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully');
    }

    public function show(Product $product)
    {
        return view('admin.view', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('admin.edit', compact('product'));
    }
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $product->update($request->all());

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        

        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully');
    }
}
