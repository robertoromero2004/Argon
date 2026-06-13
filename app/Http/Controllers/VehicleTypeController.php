<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehicleType;

class VehicleTypeController extends Controller
{
        public function index() {
            $vehicleTypes = VehicleType::all();
            return view('vehicle_type.index', compact('vehicleTypes'));
        }
    
        public function create(){
            $vehicleType = new VehicleType();
            return view('vehicle_type.create', compact('vehicleType'));
        }
    
        public function store(Request $request) {
            VehicleType::create($request->validated());
            return redirect()->route('vehicle_type.index')->with('success', 'Vehicle Type created successfully.');
        }
    
        public function show(string $id) {
            $vehicleType = VehicleType::findOrFail($id);
            return view('vehicle_type.show', compact('vehicleType'));
        }
    
        public function edit(string $id){
            $vehicleType = VehicleType::findOrFail($id);
            return view('vehicle_type.edit', compact('vehicleType'));
        }
    
        public function update(Request $request, string $id) {
            $vehicleType = VehicleType::findOrFail($id);
            $vehicleType->update($request->validated());
            return redirect()->route('vehicle_type.index')->with('success', 'Vehicle Type updated successfully.');
        }
        
        public function destroy(string $id) {
            $vehicleType = VehicleType::findOrFail($id);
            $vehicleType->delete();
            return redirect()->route('vehicle_type.index')->with('success', 'Vehicle Type deleted successfully.');
        }
}
