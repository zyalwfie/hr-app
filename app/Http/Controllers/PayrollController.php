<?php

namespace App\Http\Controllers;

use App\Models\Payroll;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payrolls = Payroll::availableEmployee();

        if (Session::get('role') !== 'Manager') {
            $payrolls = $payrolls->where('employee_id', Session::get('employee_id'));
        }

        $payrolls = $payrolls->get();

        return view('dashboard.payrolls.index', compact('payrolls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::orderBy('fullname')->get();

        return view('dashboard.payrolls.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required',
            'salary' => 'required|numeric',
            'bonuses' => 'nullable|numeric',
            'deductions' => 'nullable|numeric',
            'pay_date' => 'required'
        ]);

        $netSalary = $validated['salary'] + $validated['bonuses'] - $validated['deductions'];
        $validated['net_salary'] = $netSalary;

        Payroll::create($validated);

        return redirect()->route('payrolls.index')->with('success', 'Payroll created successfully.');
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
    public function edit(Payroll $payroll)
    {
        $employees = Employee::orderBy('fullname')->get();

        return view('dashboard.payrolls.edit', compact('payroll', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payroll $payroll)
    {
        $validated = $request->validate([
            'employee_id' => 'required',
            'salary' => 'required|numeric',
            'bonuses' => 'nullable|numeric',
            'deductions' => 'nullable|numeric',
            'pay_date' => 'required'
        ]);

        $netSalary = $validated['salary'] + $validated['bonuses'] - $validated['deductions'];
        $validated['net_salary'] = $netSalary;

        $payroll->update($validated);

        return redirect()->route('payrolls.index')->with('success', 'Payroll updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payroll $payroll)
    {
        $payroll->delete();

        return redirect()->route('payrolls.index')
            ->with('success', 'Payroll deleted successfully.')
            ->with('restoreable_id', $payroll->id);
    }

    /**
     * Restore deleted data from storage
     */
    public function restore(Payroll $payroll)
    {
        $payroll->restore();

        return redirect()->route('payrolls.index')->with('success', 'Payroll restored successfully.');
    }
}
