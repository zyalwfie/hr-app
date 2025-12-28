<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Employee;
use App\Models\Department;
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
            'first_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'integer',
            'address' => 'required',
            'birth_date' => 'required',
            'hire_date' => 'required',
            'department_id' => 'required',
            'role_id' => 'required',
            'status' => 'required',
            'salary' => 'required',
        ]);

        if ($request->post('last_name')) {
            $validated['fullname'] = $validated['first_name'] . ' ' . $request->post('last_name');
        } else {
            $validated['fullname'] = $validated['first_name'];
        }

        $birthDate = $validated['birth_date'];
        $formattedBirthDate = Carbon::parse($birthDate)->format('Y-m-d');
        $validated['birth_date'] = $formattedBirthDate;
        $hireDate = $validated['hire_date'];
        $formattedHireDate = Carbon::parse($hireDate)->format('Y-m-d');
        $validated['hire_date'] = $formattedHireDate;

        Employee::create($validated);

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
