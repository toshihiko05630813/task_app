<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タスク詳細</title>
</head>

<body>
    <h1>タスク詳細</h1>
    <div>【タイトル】</div>
    <div class="value">{{ $task['title'] }}</div>
    <br>

    <div>【内容】</div>
    <div class="value">{{ $task['body'] }}</div>
    <br>

    <button onclick='location.href="{{ route('tasks.index') }}"'>一覧へ戻る</button>
    <button onclick='location.href="{{ route('tasks.edit', $task) }}"'>編集する</button>
    <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">削除する</button>
    </form>
</body>

</html>
