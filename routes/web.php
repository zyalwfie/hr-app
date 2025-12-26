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
    Route::resource('/departments', DepartmentController::class);
    Route::resource('/roles', RoleController::class);
    Route::resource('/presences', PresenceController::class);
    Route::resource('/payrolls', PayrollController::class);
    Route::resource('/leave-requests', LeaveRequestController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
