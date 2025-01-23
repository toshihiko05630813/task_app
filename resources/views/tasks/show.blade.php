<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タスク詳細</title>
</head>
<body>
    <h1>タスク詳細</h1>
    <h4>【タイトル】</h4>
    <p>{{ $task->body }}</p>     <div class="value">{{ $task['title'] }}</div>

    <h4>【内容】</h4>     <div class="value">{{ $task['body'] }}</div>
    
    <a href="{{ route('tasks.edit', $task->id) }}">編集</a>
    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">一覧へ戻る</button><button type="submit">編集する</button><button type="submit">削除</button>
        <button onclick="location.href='{{ route('tasks.create') }}'">一覧へ戻る</button>
    </form>
    <a href="{{ route('tasks.index') }}">一覧へ戻る</a>
</body>
</html>
