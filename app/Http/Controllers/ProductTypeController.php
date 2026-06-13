<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;

class ProductTypeController extends Controller
{
        public function index() {
            $productTypes = ProductType::all();
            return view('product_type.index', compact('productTypes'));
        }
    
        
        public function create(){
            $productType = new ProductType();
            return view('product_type.create', compact('productType'));
        }
    
        
        public function store(Request $request){
            ProductType::create($request->validated());
            return redirect()->route('product_type.index')->with('success', 'Product Type created successfully.');
        }
    
        
        public function show(string $id){
            $productType = ProductType::findOrFail($id);
            return view('product_type.show', compact('productType'));
        }
    
        
        public function edit(string $id) {
            $productType = ProductType::findOrFail($id);
            return view('product_type.edit', compact('productType'));
        }
    
       
        public function update(Request $request, string $id) {
            $productType = ProductType::findOrFail($id);
            $productType->update($request->validated());
            return redirect()->route('product_type.index')->with('success', 'Product Type updated successfully.');
        }
    
        
        public function destroy(string $id) {
            $productType = ProductType::findOrFail($id);
            $productType->delete();
            return redirect()->route('product_type.index')->with('success', 'Product Type deleted successfully.');
        }
}
