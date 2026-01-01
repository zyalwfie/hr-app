<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Payroll;
use App\Models\Presence;
use App\Models\Task;

class DashboardController extends Controller
{
    public function index()
    {
        $employeesCount = Employee::count();
        $departmentsCount = Department::count();
        $payrollsCount = Payroll::count();
        $presencesCount = Presence::count();
        $latestTasks = Task::availableEmployee()->orderBy('created_at')->get();

        // Chart data
        $chartData = Presence::selectRaw('
        month(date) as month,
        count(*) as total
        ')
            ->where('status', 'present')
            ->groupBy('month')
            ->orderBy('month')
            ->get()
            ->map(fn ($p) => [
                'month' => $p->month,
                'total' => $p->total,
            ]);

        return view('dashboard.index', compact('employeesCount', 'departmentsCount', 'payrollsCount', 'presencesCount', 'latestTasks', 'chartData'));
    }
}
