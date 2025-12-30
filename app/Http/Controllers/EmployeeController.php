<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();

        return view('dashboard.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::orderBy('name')->get();
        $roles = Role::orderBy('title')->get();

        return view('dashboard.employees.create', compact('departments', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name'     => 'required|string',
            'last_name'      => 'nullable|string',
            'email'          => 'required|string|email',
            'phone_number'   => ['required', 'string', 'regex:/^(?:\+62|62|0)8[1-9][0-9]{6,10}$/'],
            'address'        => 'required|string',
            'birth_date'     => 'required|date',
            'hire_date'      => 'required|date',
            'department_id'  => 'required|exists:departments,id',
            'role_id'        => 'required|exists:roles,id',
            'status'         => 'required|string|in:active,inactive,other',
            'salary'         => 'required|numeric',
        ]);

        $validated['fullname'] = collect([
            $validated['first_name'],
            $validated['last_name'] ?? null,
        ])->filter()->implode(' ');

        Arr::forget($validated, ['first_name', 'last_name']);

        Employee::create($validated);

        return redirect()
            ->route('employees.index')
            ->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('dashboard.employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $departments = Department::orderBy('name')->get();
        $roles = Role::orderBy('title')->get();

        $parts = Str::of($employee->fullname)
            ->trim()
            ->explode(' ')
            ->filter();

        $firstName = $parts->first();
        $lastName  = $parts->skip(1)->implode(' ');

        return view('dashboard.employees.edit', compact(
            'employee',
            'departments',
            'roles',
            'firstName',
            'lastName'
        ));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'id' => 'required',
            'first_name' => 'required|string',
            'last_name' => 'nullable|string',
            'email' => 'required|string|email',
            'phone_number' => ['required', 'string', 'regex:/^(?:\+62|62|0)8[1-9][0-9]{6,10}$/'],
            'address' => 'required|string',
            'birth_date' => 'required|date',
            'hire_date' => 'required|date',
            'department_id' => 'required|exists:departments,id',
            'role_id' => 'required|exists:roles,id',
            'status' => 'required|string|in:active,inactive,other',
            'salary' => 'required|numeric',
        ]);

        $validated['fullname'] = collect([
            $validated['first_name'],
            $validated['last_name'] ?? null,
        ])->filter()->implode(' ');

        Arr::forget($validated, ['first_name', 'last_name']);

        $employee->update($validated);

        return redirect()
            ->route('employees.show', $employee->id)
            ->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.')->with('restoreable_id', $employee->id);
    }

    /**
     * Restore deleted data from storage
     */
    public function restore(Employee $employee)
    {
        $employee->restore();

        return redirect()->route('employees.index')->with('success', 'Employee restored successfully.');
    }
}
