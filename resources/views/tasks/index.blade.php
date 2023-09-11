@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-4xl mb-8">タスク一覧</h1>
    <a href="/tasks/create" class="bg-blue-500 text-white py-2 px-4 rounded mb-4 inline-block">新規作成</a>
    <ul class="space-y-4">
        @foreach($tasks as $task)
        <li class="bg-white p-4 rounded shadow flex justify-between items-center">
            <h2 class="text-2xl font-semibold">{{ $task->title }}</h2>
            <div>
                <span class="text-gray-600">ステータス: {{ $task->status }}</span>
                <a href="/tasks/{{ $task->id }}" class="text-blue-500 ml-4">編集</a>
            </div>
        </li>
        @endforeach
    </ul>
</div>
@endsection