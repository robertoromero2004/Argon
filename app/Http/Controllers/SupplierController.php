<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
        public function index() {
            $suppliers = Supplier::all();
            return view('supplier.index', compact('suppliers'));
        }
    
        
        public function create(){
            $supplier = new Supplier();
            return view('supplier.create', compact('supplier'));
        }
    
        
        public function store(Request $request){
            Supplier::create($request->validated());
            return redirect()->route('supplier.index')->with('success', 'Supplier created successfully.');
        }
    
        
        public function show(string $id){
            $supplier = Supplier::findOrFail($id);
            return view('supplier.show', compact('supplier'));
        }
    
        
        public function edit(string $id) {
            $supplier = Supplier::findOrFail($id);
            return view('supplier.edit', compact('supplier'));
        }
    
       
        public function update(Request $request, string $id) {
            $supplier = Supplier::findOrFail($id);
            $supplier->update($request->validated());
            return redirect()->route('supplier.index')->with('success', 'Supplier updated successfully.');
        }
    
        
        public function destroy(string $id) {
            $supplier = Supplier::findOrFail($id);
            $supplier->delete();
            return redirect()->route('supplier.index')->with('success', 'Supplier deleted successfully.');
        }
}
