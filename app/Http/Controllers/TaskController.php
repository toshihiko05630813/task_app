<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // タスク一覧
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    // タスク作成フォーム
    public function create()
    {
        return view('tasks.create');
    }

    // タスク保存
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Task::create($request->all());

        return redirect()->route('tasks.index');
    }

    // タスク詳細
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    // タスク編集フォーム
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // タスク更新
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.show', $task->id);
    }

    // タスク削除
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index');
    }
}
