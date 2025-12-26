<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();

        return view('dashboard.tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::orderBy('fullname')->get();

        return view('dashboard.tasks.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255|string',
            'description' => 'nullable|string',
            'assigned_to' => 'required|exists:employees,id',
            'due_date' => 'required|date',
            'status' => 'required'
        ]);

        $date = $validated['due_date'];
        $formattedDate = Carbon::parse($date)->format('Y-m-d');
        $validated['due_date'] = $formattedDate;

        Task::create($validated);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('dashboard.tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $employees = Employee::orderBy('fullname')->get();

        return view('dashboard.tasks.edit', compact('task', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'required|max:255|string',
            'description' => 'nullable|string',
            'assigned_to' => 'required|exists:employees,id',
            'due_date' => 'required|date',
            'status' => 'required'
        ]);

        $date = $validated['due_date'];
        $formattedDate = Carbon::parse($date)->format('Y-m-d');
        $validated['due_date'] = $formattedDate;

        $task->update($validated);

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    /**
     * Update status task as pending
     */
    public function markAsPending(Task $task)
    {
        $task->update([
            'status' => 'pending'
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task marked as pending.');
    }

    /**
     * Update status task as progress
     */
    public function markAsProgress(Task $task)
    {
        $task->update([
            'status' => 'progress'
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task marked as progress.');
    }

    /**
     * Update status task as complete
     */
    public function markAsComplete(Task $task)
    {
        $task->update([
            'status' => 'complete'
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task marked as complete.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.')->with('restoreable_task_id', $task->id);
    }

    /**
     * Restore deleted data from storage
     */
    public function restore(Task $task)
    {
        $task->restore();

        return redirect()->route('tasks.index')->with('success', 'Task successfully to restore.');
    }
}
