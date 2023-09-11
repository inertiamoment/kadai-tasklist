@extends('layouts.app')

@section('content')

    <div class="flex items-center justify-center h-screen bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-md w-96">
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold">ログイン</h2>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" name="email" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                    <input type="password" name="password" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 w-full rounded-full">ログイン / Log in</button>

                {{-- ユーザ登録ページへのリンク --}}
                <div class="mt-4 text-center">
                    <a class="text-blue-500 hover:underline" href="{{ route('register') }}">今すぐ登録</a>
                </div>
            </form>
        </div>
    </div>
@endsection
