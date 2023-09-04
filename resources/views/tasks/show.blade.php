@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-4xl mb-8">タスク詳細</h1>
    @if($task !== null)
    <div class="bg-white p-4 rounded shadow">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">{{ $task->title }}</h2>
            <span class="text-gray-600">ステータス: {{ $task->status }}</span>
        </div>
        <p class="text-gray-600">{{ $task->content }}</p>
    </div>
    <div class="flex justify-between mt-4">
        <a href="/tasks/{{ $task->id }}/edit" class="bg-yellow-500 text-white py-2 px-4 rounded">編集</a>
        <a href="/tasks" class="bg-blue-500 text-white py-2 px-4 rounded">戻る</a>
    </div>
    @else
    <p>Task not found.</p>
    @endif
</div>
@endsection
