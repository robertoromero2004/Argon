<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MovementType;

class MovementTypeController extends Controller
{
        public function index() {
            $movementTypes = MovementType::all();
            return view('movement_type.index', compact('movementTypes'));
        }
    
        public function create(){
            $movementType = new MovementType();
            return view('movement_type.create', compact('movementType'));
        }
    
        public function store(Request $request) {
            MovementType::create($request->validated());
            return redirect()->route('movement_types.index')->with('success', 'Movement Type created successfully.');
        }
    
        public function show(string $id) {
            $movementType = MovementType::findOrFail($id);
            return view('movement_type.show', compact('movementType'));
        }
    
        public function edit(string $id){
            $movementType = MovementType::findOrFail($id);
            return view('movement_type.edit', compact('movementType'));
        }
    
        public function update(Request $request, string $id) {
            $movementType = MovementType::findOrFail($id);
            $movementType->update($request->validated());
            return redirect()->route('movement_types.index')->with('success', 'Movement Type updated successfully.');
        }
        public function destroy(string $id) {
            $movementType = MovementType::findOrFail($id);
            $movementType->delete();
            return redirect()->route('movement_types.index')->with('success', 'Movement Type deleted successfully.');
        }
}
