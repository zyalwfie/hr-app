<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Presence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use function Symfony\Component\Clock\now;

class PresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presences = Presence::availableEmployee();

        if (Session::get('role') !== 'Manager') {
            $presences = $presences->where('employee_id', Session::get('employee_id'));
        }

        $presences = $presences->get();

        return view('dashboard.presences.index', compact('presences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Session::get('role') === 'Manager') {
            $employees = Employee::orderBy('fullname')->get();
            return view('dashboard.presences.create', compact('employees'));
        }

        return view('dashboard.presences.present');
    }

    /**
     * Calculate user position
     */
    protected function distance($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadius = 6371000;

        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);

        $a = sin($dLat / 2) * sin($dLat / 2) +
            cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
            sin($dLon / 2) * sin($dLon / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        return $earthRadius * $c;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'longitude' => 'required',
            'latitude' => 'required'
        ]);

        $officeLat = -8.599801795546826;
        $officeLng = 116.1213972712707;
        $radius = 20;

        $distance = $this->distance(
            $validated['latitude'],
            $validated['longitude'],
            $officeLat,
            $officeLng
        );

        if ($distance > $radius) {
            return back()->withErrors([
                'location' => 'You are outside the office area.'
            ]);
        }

        Presence::create([
            'employee_id' => Session::get('employee_id'),
            'check_in' => now()->format('Y-m-d H:i'),
            'date' => now(),
            'status' => 'present'
        ]);

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
