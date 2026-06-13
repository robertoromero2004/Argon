<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\warehouse;

class WarehouseController extends Controller
{
        public function index() {
            $warehouses = Warehouse::all();
            return view('warehouse.index', compact('warehouses'));
        }
    
        public function create(){
            $warehouse = new Warehouse();
            return view('warehouse.create', compact('warehouse'));
        }
    
        public function store(Request $request) {
            Warehouse::create($request->validated());
            return redirect()->route('warehouse.index')->with('success', 'Warehouse created successfully.');
        }
    
        public function show(string $id) {
            $warehouse = Warehouse::findOrFail($id);
            return view('warehouse.show', compact('warehouse'));
        }
    
        public function edit(string $id){
            $warehouse = Warehouse::findOrFail($id);
            return view('warehouse.edit', compact('warehouse'));
        }
    
        public function update(Request $request, string $id) {
            $warehouse = Warehouse::findOrFail($id);
            $warehouse->update($request->validated());
            return redirect()->route('warehouse.index')->with('success', 'Warehouse updated successfully.');
        }
        
        public function destroy(string $id) {
            $warehouse = Warehouse::findOrFail($id);
            $warehouse->delete();
            return redirect()->route('warehouse.index')->with('success', 'Warehouse deleted successfully.');
        }
}
