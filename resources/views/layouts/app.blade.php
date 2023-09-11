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
        <div class="flex items-center space-x-4">
            <a href="/tasks/create" class="bg-white text-purple-500 hover:bg-purple-500 hover:text-white py-2 px-4 rounded">タスク作成</a>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" class="text-white hover:underline">ログアウト</a>
            </form>
        </div>
    </div>
</nav>


<div class="container mx-auto p-4">
    @yield('content')
</div>
</body>
</html>
