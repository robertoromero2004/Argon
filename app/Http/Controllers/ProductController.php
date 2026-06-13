<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
        public function index()
        {
            $products = Product::all();
            return view('product.index', compact('products'));
        }
    
        public function create()
        {
            $product = new Product();
            return view('product.create', compact('product'));
        }
    
        public function store(Request $request)
        {
            Product::create($request->validated());
            return redirect()->route('product.index')->with('success', 'Product created successfully.');
        }
    
        public function show(string $id)
        {
            $product = Product::findOrFail($id);
            return view('product.show', compact('product'));
        }
    
        public function edit(string $id)
        {
            $product = Product::findOrFail($id);
            return view('product.edit', compact('product'));
        }
    
        public function update(Request $request, string $id)
        {
            $product = Product::findOrFail($id);
            $product->update($request->validated());
            return redirect()->route('product.index')->with('success', 'Product updated successfully.');
        }

        public function destroy(string $id)
        {
            $product = Product::findOrFail($id);
            $product->delete();
            return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
        }
}
