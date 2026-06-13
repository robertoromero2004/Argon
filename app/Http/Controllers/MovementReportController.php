<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MovementReportRequest;
use App\Models\MovementReport;
use App\Models\Employee;
use App\Models\Movement;

class MovementReportController extends Controller
{
    public function index()
    {
        $movementReports = MovementReport::all();
        return view('movement_report.index', compact('movementReports'));
    }

    public function create()
    {
        $movementReports = new MovementReport();
        $employees = Employee::all();
        $movements = Movement::all();
        return view('movement_report.create', compact('movementReports', 'employees', 'movements'));
    }

    public function store(MovementReportRequest $request)
    {
        MovementReport::create($request->validated());
        return redirect()->route('movement_report.index')->with('success', 'Movement report created successfully.');
    }

    public function show(string $id)
    {
        $movementReport = MovementReport::findOrFail($id);
        return view('movement_report.show', compact('movementReport'));
    }
    public function edit(string $id)
    {
        $movementReport = MovementReport::findOrFail($id);
        $employees = Employee::all();
        $movements = Movement::all();
        return view('movement_report.edit', compact('movementReport', 'employees', 'movements'));
    }
    public function update(MovementReportRequest $request, string $id)
    {
        $movementReport = MovementReport::findOrFail($id);
        $movementReport->update($request->validated());
        return redirect()->route('movement_report.index')->with('success', 'Movement report updated successfully.');
    }
    public function destroy(string $id)
    {
        $movementReport = MovementReport::findOrFail($id);
        $movementReport->delete();
        return redirect()->route('movement_report.index')->with('success', 'Movement report deleted successfully.');
    }

}
