<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Payroll;
use App\Models\Presence;
use App\Models\Task;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $employeesCount = Employee::count();
        $departmentsCount = Department::count();
        $payrollsCount = Payroll::count();
        $presencesCount = Presence::count();
        $latestTasks = Task::availableEmployee()->orderBy('created_at')->get();

        return view('dashboard.index', compact('employeesCount', 'departmentsCount', 'payrollsCount', 'presencesCount', 'latestTasks'));
    }
}
