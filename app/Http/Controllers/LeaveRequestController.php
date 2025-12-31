<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\LeaveRequest;
use Illuminate\Http\Request;

class LeaveRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leave_requests = LeaveRequest::availableEmployee();

        if (session('role') !== 'Manager') {
            $leave_requests = $leave_requests->where('employee_id', session('employee_id'));
        }

        $leave_requests = $leave_requests->get();

        return view('dashboard.leave-requests.index', compact('leave_requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = null;

        if (session('role') === 'Manager') {
            $employees = Employee::orderBy('fullname')->get();
        }

        return view('dashboard.leave-requests.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'leave_type' => 'required',
            'range_date' => 'required',
        ]);

        [$startDate, $endDate] = explode('to', $validated['range_date']);

        LeaveRequest::create([
            'employee_id' => $validated['employee_id'],
            'leave_type' => $validated['leave_type'],
            'start_date' => $startDate,
            'end_date' => $endDate
        ]);

        return redirect()->route('leave-requests.index')->with('success', 'Leave request created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(LeaveRequest $leave_request)
    {
        return view('dashboard.leave-requests.show', compact('leave_request'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LeaveRequest $leave_request)
    {
        $employees = Employee::orderBy('fullname')->get();

        return view('dashboard.leave-requests.edit', compact('leave_request', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LeaveRequest $leave_request)
    {
        $validated = $request->validate([
            'id' => 'required',
            'employee_id' => 'required|exists:employees,id',
            'leave_type' => 'required',
            'range_date' => 'required',
        ]);

        [$startDate, $endDate] = explode('to', $validated['range_date']);

        $leave_request->update([
            'id' => $validated['id'],
            'employee_id' => $validated['employee_id'],
            'leave_type' => $validated['leave_type'],
            'start_date' => $startDate,
            'end_date' => $endDate
        ]);

        return redirect()->route('leave-requests.show', $leave_request->id)->with('success', 'Leave request updated successfully.');
    }

    /**
     * Approve employee leave request
     */
    public function approve(LeaveRequest $leave_request)
    {
        $leave_request->update([
            'status' => 'approved',
        ]);

        return redirect()->route('leave-requests.show', $leave_request->id)->with('success', 'Leave request approved successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LeaveRequest $leave_request)
    {
        $leave_request->delete();

        return redirect()->route('leave-requests.index')->with('success', 'Leave request deleted successfully.')->with('restoreable_id', $leave_request->id);
    }

    /**
     * Restore deleted data from storage
     */
    public function restore(LeaveRequest $leave_request)
    {
        $leave_request->restore();

        return redirect()->route('leave-requests.index')->with('success', 'LeaveRequest restored successfully.');
    }
}
