<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TasksController extends Controller
{
    // ... [その他のメソッドは変更なし]

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
        $task->user_id = Auth::id();  // 現在のユーザーIDを設定
        $task->save();

        return redirect('/')->with('success', 'Task created successfully');
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        if ($task === null) {
            return redirect('/tasks')->with('error', 'Task not found');
        }

        // 現在のユーザーIDとタスクの所有者のIDが一致しない場合、エラーメッセージを表示してリダイレクト
        if (Auth::id() !== $task->user_id) {
            return redirect('/tasks')->with('error', 'Unauthorized access.');
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

        // 現在のユーザーIDとタスクの所有者のIDが一致しない場合、エラーメッセージを表示してリダイレクト
        if (Auth::id() !== $task->user_id) {
            return redirect('/tasks')->with('error', 'Unauthorized access.');
        }

        $task->delete();

        return redirect('/')->with('success', 'Task deleted successfully');
    }
}
