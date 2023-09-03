@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-4xl mb-8">Task List</h1>

    <a href="/tasks/create" class="bg-blue-500 text-white py-2 px-4 rounded mb-4 inline-block">新規作成</a>

    <ul class="space-y-4">
        @foreach($tasks as $task)
        <li class="bg-white p-4 rounded shadow">
            <h2 class="text-2xl font-semibold">{{ $task->title }}</h2>
            <div class="flex justify-end mt-4">
                <a href="/tasks/{{ $task->id }}" class="text-blue-500">詳細表示</a>
            </div>
        </li>
        @endforeach
    </ul>
</div>
@endsection
