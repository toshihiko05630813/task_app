<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タスク作成</title>
</head>
<body>
    <h1>新しいタスクを作成</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">タイトル</label>
        <input type="text" name="title" id="title" required><br>
        <label for="body">内容</label>
        <textarea name="body" id="body" required></textarea><br>
        <button type="submit">作成</button>
    </form>
    <a href="{{ route('tasks.index') }}">一覧へ戻る</a>
</body>
</html>
