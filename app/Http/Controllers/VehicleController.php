<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
        public function index() {
            $vehicles = Vehicle::all();
            return view('vehicle.index', compact('vehicles'));
        }
    
        public function create(){
            $vehicle = new Vehicle();
            return view('vehicle.create', compact('vehicle'));
        }
    
        public function store(Request $request) {
            Vehicle::create($request->validated());
            return redirect()->route('vehicle.index')->with('success', 'Vehicle created successfully.');
        }
    
        public function show(string $id) {
            $vehicle = Vehicle::findOrFail($id);
            return view('vehicle.show', compact('vehicle'));
        }
    
        public function edit(string $id){
            $vehicle = Vehicle::findOrFail($id);
            return view('vehicle.edit', compact('vehicle'));
        }
    
        public function update(Request $request, string $id) {
            $vehicle = Vehicle::findOrFail($id);
            $vehicle->update($request->validated());
            return redirect()->route('vehicle.index')->with('success', 'Vehicle updated successfully.');
        }
        
        public function destroy(string $id) {
            $vehicle = Vehicle::findOrFail($id);
            $vehicle->delete();
            return redirect()->route('vehicle.index')->with('success', 'Vehicle deleted successfully.');
        }
}
