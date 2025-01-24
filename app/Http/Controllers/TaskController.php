<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\TaskRequest;

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

    public function store(TaskRequest $request)
    {
        // インスタンスの作成
        $task = new Task;

        $task->title = $request->title;
        $task->body = $request->body;

        $task->save();

        // 登録したらindexに戻る
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
    public function update(TaskRequest $request, $id)
    {
        //更新データの取得
        $task = Task::find($id);

        $task->title = $request->title;
        $task->body = $request->body;

        $task->save();


        return redirect(route('tasks.index'));
    }

    // タスク削除
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index');
    }
}
