<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();

        return view('dashboard.departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.departments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string|max:255',
            'status' => 'required|in:active,inactive'
        ]);

        Department::create($validated);

        return redirect()->route('departments.index')->with('success', 'Department created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        return view('dashboard.departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        $validated = $request->validate([
            'id' => 'required',
            'name' => 'required|string',
            'description' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive,other'
        ]);

        $department->update($validated);

        return redirect()->route('departments.index')->with('success', 'Department updated successfully.');
    }

    /**
     * Update status department to be inactive
     */
    public function disable(Department $department)
    {
        $department->update([
            'status' => 'inactive'
        ]);

        return redirect()->route('departments.index')->with('success', 'Department disabled successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();

        return redirect()->route('departments.index')->with('success', 'Department deleted successfully.')->with('restoreable_id', $department->id);
    }

    /**
     * Restore deleted data from storage
     */
    public function restore(Department $department)
    {
        $department->restore();

        return redirect()->route('departments.index')->with('success', 'Department successfully to restore.');
    }
}
