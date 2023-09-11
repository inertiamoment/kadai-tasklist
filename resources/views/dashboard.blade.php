@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <!-- ユーザーが認証されている場合、タスクリストにリダイレクト -->
        <script>window.location = "{{ route('tasks.index') }}";</script>
    @else
        <!-- メインコンテナ -->
        <div class="flex items-center justify-center h-screen bg-gray-100">
            <!-- カードコンテナ -->
            <div class="bg-white p-8 rounded-lg shadow-md w-96">
                <!-- "Task List" ロゴ -->
                <div class="text-center mb-4">
                    <h1 class="text-4xl font-bold">Task List</h1>
                </div>
                <!-- ログインフォーム -->
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <input type="text" name="email" placeholder="メールアドレス" class="w-full p-2 border rounded">
                    </div>
                    <div class="mb-4">
                        <input type="password" name="password" placeholder="パスワード" class="w-full p-2 border rounded">
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">ログイン</button>
                    </div>
                </form>
                <!-- 登録リンク -->
                <div class="text-center">
                    <span class="text-sm">アカウントを持っていないですか？</span>
                    <a href="{{ route('register') }}" class="text-blue-500 text-sm">登録する</a>
                </div>
            </div>
        </div>
    @endif
@endsection
