<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>TaskList</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<nav class="bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a class="text-white text-2xl font-semibold" href="/">TaskList</a>
        <ul class="flex space-x-4">
            <li class="text-white"><a href="/" class="hover:underline">ホーム</a></li>
            <li class="text-white"><a href="/tasks/show" class="hover:underline">タスク一覧</a></li>
            <li class="text-white"><a href="/tasks/create" class="hover:underline">タスク作成</a></li>
        </ul>
    </div>
</nav>

<div class="container mx-auto p-4">
    @yield('content')
</div>
</body>
</html>
