@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-4xl mb-8">タスク編集</h1>

    @if($task !== null)
    <form action="{{ url('tasks/' . $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">タイトル:</label>
            <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}" class="form-input rounded-md shadow-sm w-full @error('title') border-red-500 @enderror">
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="content" class="block text-gray-700 font-bold mb-2">内容:</label>
            <textarea name="content" id="content" class="form-textarea rounded-md shadow-sm w-full @error('content') border-red-500 @enderror">{{ old('content', $task->content) }}</textarea>
            @error('content')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="status" class="block text-gray-700 font-bold mb-2">ステータス:</label>
            <input type="text" name="status" id="status" value="{{ old('status', $task->status) }}" class="form-input rounded-md shadow-sm w-full @error('status') border-red-500 @enderror">
            @error('status')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">Update</button>
    </form>
    @else
    <p>Task not found.</p>
    @endif
</div>
@endsection
