<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MovementRequest;
use App\Models\Movement;
use App\Models\employee;

class MovementController extends Controller
{
        public function index() {
            $movements = Movement::all();
            return view('movement.index', compact('movements'));
        }
    
        public function create(){
            $movement = new Movement();
            $employees = Employee::all();
            return view('movement.create', compact('movement', 'employees'));
        }
    
        public function store(Request $request) {
            Movement::create($request->validated());
            return redirect()->route('movement.index')->with('success', 'Movement created successfully.');
        }
    
        public function show(string $id) {
            $movement = Movement::findOrFail($id);
            return view('movement.show', compact('movement'));
        }
    
        public function edit(string $id)  {
            $movement = Movement::findOrFail($id);
            $employees = Employee::all();
            return view('movement.edit', compact('movement', 'employees'));
        }
    
        public function update(Request $request, string $id)  {
            $movement = Movement::findOrFail($id);
            $movement->update($request->validated());
            return redirect()->route('movement.index')->with('success', 'Movement updated successfully.');
        }
    
        public function destroy(string $id)  {
            $movement = Movement::findOrFail($id);
            $movement->delete();
            return redirect()->route('movement.index')->with('success', 'Movement deleted successfully.');
        }
}
