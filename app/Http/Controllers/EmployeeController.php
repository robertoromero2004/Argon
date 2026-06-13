<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{

        public function index() {
            $employees = Employee::all();
            return view('employee.index', compact('employees'));
        }
    
        
        public function create(){
            $employee = new Employee();
            return view('employee.create', compact('employee'));
        }
    
        
        public function store(Request $request){
            Employee::create($request->validated());
            return redirect()->route('employee.index')->with('success', 'Employee created successfully.');
        }
    
        
        public function show(string $id){
            $employee = Employee::findOrFail($id);
            return view('employee.show', compact('employee'));
        }
    
        
        public function edit(string $id) {
            $employee = Employee::findOrFail($id);
            return view('employee.edit', compact('employee'));
        }
    
       
        public function update(Request $request, string $id) {
            $employee = Employee::findOrFail($id);
            $employee->update($request->validated());
            return redirect()->route('employee.index')->with('success', 'Employee updated successfully.');
        }
    
        
        public function destroy(string $id) {
            $employee = Employee::findOrFail($id);
            $employee->delete();
            return redirect()->route('employee.index')->with('success', 'Employee deleted successfully.');
        }     
}
