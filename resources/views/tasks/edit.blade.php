<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>memos edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>タスク編集</h1>
    <form action="{{ route('tasks.update', $task) }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for='title'>タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}">        
        </p>

        <p>
            <label for='body'>本文</label><br>
            <textarea name="body" class="body" id="body">{{ old('body', $task->body) }}</textarea>        
        </p>

        <input type="submit" value="更新">
        <button onclick='location.href="{{ route('tasks.index') }}"'>詳細に戻る</button>
    </form>
</body>
</html>
