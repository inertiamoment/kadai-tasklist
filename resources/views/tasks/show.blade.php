@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-4xl mb-8">タスク詳細</h1>
    @if($task !== null)
    <div class="flex items-start">
        <div class="bg-white p-4 rounded shadow flex-grow">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-semibold">{{ $task->title }}</h2>
                <div class="flex items-center">
                    <span class="text-gray-600 mr-4">ステータス: {{ $task->status }}</span>
                    <a href="/tasks/{{ $task->id }}/edit" class="bg-yellow-500 text-white py-2 px-4 rounded">編集</a>
                </div>
            </div>
            <p class="text-gray-600">{{ $task->content }}</p>
        </div>
    </div>
    <div class="flex justify-end mt-4">
        <a href="/tasks" class="bg-blue-500 text-white py-2 px-4 rounded">戻る</a>
    </div>
    @else
    <p>Task not found.</p>
    @endif
</div>
@endsection
