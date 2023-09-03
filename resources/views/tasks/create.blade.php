@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-4xl mb-8">新しいタスクを作成</h1>
    <form action="{{ url('tasks') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">タイトル:</label>
            <input type="text" name="title" id="title" class="form-input rounded-md shadow-sm w-full">
        </div>
        <div class="mb-4">
            <label for="content" class="block text-gray-700 font-bold mb-2">内容:</label>
            <textarea name="content" id="content" class="form-textarea rounded-md shadow-sm w-full"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">作成</button>
    </form>
</div>
@endsection
