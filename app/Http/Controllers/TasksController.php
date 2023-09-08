<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Redirect;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function show($id)
    {
        $task = Task::find($id);
        if ($task === null) {
            return redirect('/tasks')->with('error', 'Task not found');
        }
        return view('tasks.show', ['task' => $task]);
    }

    public function edit($id)
    {
        $task = Task::find($id);
        if ($task === null) {
            return redirect('/tasks')->with('error', 'Task not found');
        }
        return view('tasks.edit', ['task' => $task]);
    }

    public function create()
    {
        return view('tasks.create');
    }

public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'status' => 'required|max:10',
    ]);

        $task = new Task;
        $task->content = $validatedData['content'];
        $task->status = $validatedData['status'];
        $task->title = $validatedData['title'];
        $task->save();

        return redirect('/')->with('success', 'Task created successfully');
    }

public function update(Request $request, $id)
{
    $task = Task::find($id);
    if ($task === null) {
        return redirect('/tasks')->with('error', 'Task not found');
    }

    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'status' => 'required|max:10',
    ]);

        $task->content = $validatedData['content'];
        $task->status = $validatedData['status'];
        $task->title = $validatedData['title'];
        $task->save();

        return redirect('/tasks/' . $id)->with('success', 'Task updated successfully');
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        if ($task === null) {
            return redirect('/tasks')->with('error', 'Task not found');
        }

        $task->delete();

        return redirect('/')->with('success', 'Task deleted successfully');
    }
}
