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

        $chartData = Presence::selectRaw("
            MONTH(date) as month,
            SUM(CASE WHEN status = 'present' THEN 1 ELSE 0 END) as present_total,
            SUM(CASE WHEN status = 'absent' THEN 1 ELSE 0 END) as absent_total
        ")
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $chartPresentData = $chartData->map(fn($row) => [
            'month' => $row->month,
            'total' => (int) $row->present_total,
        ]);

        $chartAbsentData = $chartData->map(fn($row) => [
            'month' => $row->month,
            'total' => (int) $row->absent_total,
        ]);

        return view('dashboard.index', compact(
            'employeesCount',
            'departmentsCount',
            'payrollsCount',
            'presencesCount',
            'latestTasks',
            'chartPresentData',
            'chartAbsentData'
        ));
    }
}
