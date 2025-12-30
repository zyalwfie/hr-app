<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Presence;
use Illuminate\Http\Request;

class PresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presences = Presence::availableEmployee()->get();

        return view('dashboard.presences.index', compact('presences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::orderBy('fullname')->get();

        return view('dashboard.presences.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
            'date' => 'required',
            'status' => 'required|in:present,absence,leave,other'
        ]);

        Presence::create($validated);

        return redirect()->route('presences.index')->with('success', 'Presence created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Presence $presence)
    {
        return view('dashboard.presences.show', compact('presence'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Presence $presence)
    {
        $employees = Employee::orderBy('fullname')->get();

        return view('dashboard.presences.edit', compact('presence', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Presence $presence)
    {
        $validated = $request->validate([
            'employee_id' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
            'date' => 'required',
            'status' => 'required|in:present,absence,leave,other'
        ]);

        $presence->update($validated);

        return redirect()->route('presences.show', $presence->id)->with('success', 'Presence updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presence $presence)
    {
        $presence->delete();

        return redirect()->route('presences.index')->with('success', 'Presence deleted successfully.')->with('restoreable_id', $presence->id);
    }

    /**
     * Restore deleted data from storage
     */
    public function restore(Presence $presence)
    {
        $presence->restore();

        return redirect()->route('presences.index')->with('success', 'Presence restored successfully.');
    }
}
