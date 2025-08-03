<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::where('user_id', Auth::id())->get();
        return view('tasks.index', compact('tasks'));
    }

    public function create() {
        return view('tasks.create');
    }

    public function store(Request $request) {
        $request->validate(['title'=>'required']);
        Task::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect()->route('tasks.index');
    }
    
    public function edit(Task $task) {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task) {
        $task->update($request->only('title','description','is_completed'));
        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task) {
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
