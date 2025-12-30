<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeaveRequestController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\PresenceController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('/tasks', TaskController::class);
    Route::patch('/tasks/{task}/pending', [TaskController::class, 'markAsPending'])->name('tasks.pending');
    Route::patch('/tasks/{task}/progress', [TaskController::class, 'markAsProgress'])->name('tasks.progress');
    Route::patch('/tasks/{task}/complete', [TaskController::class, 'markAsComplete'])->name('tasks.complete');
    Route::patch('/tasks/{task}/restore', [TaskController::class, 'restore'])->withTrashed()->name('tasks.restore');

    Route::resource('/employees', EmployeeController::class);
    Route::patch('/employees/{employee}/restore', [EmployeeController::class, 'restore'])->withTrashed()->name('employees.restore');

    Route::resource('/departments', DepartmentController::class);
    Route::patch('/departments/{department}/disable', [DepartmentController::class, 'disable'])->name('departments.disable');
    Route::patch('/departments/{department}/restore', [DepartmentController::class, 'restore'])->withTrashed()->name('departments.restore');

    Route::resource('/roles', RoleController::class);
    Route::patch('/roles/{role}/restore', [RoleController::class, 'restore'])->withTrashed()->name('roles.restore');

    Route::resource('/presences', PresenceController::class);
    Route::patch('/presences/{presence}/restore', [PresenceController::class, 'restore'])->withTrashed()->name('presences.restore');

    Route::resource('/payrolls', PayrollController::class);
    Route::patch('/payrolls/{payroll}/restore', [PayrollController::class, 'restore'])->withTrashed()->name('payrolls.restore');

    Route::resource('/leave-requests', LeaveRequestController::class);
    Route::patch('/leave-requests/{leave_request}/restore', [LeaveRequestController::class, 'restore'])->withTrashed()->name('leave-requests.restore');
    Route::patch('/leave-requests/{leave_request}/approve', [LeaveRequestController::class, 'approve'])->name('leave-requests.approve');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
