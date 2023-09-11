@extends('layouts.app')

@section('content')

    <div class="flex items-center justify-center h-screen bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-md w-96">
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold">登録 / Sign up</h2>
            </div>

            <form method="POST" action="{{ route('register') }}" class="w-1/2">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-600">名前 / Name</label>
                    <input type="text" name="name" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" name="email" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600">パスワード / Password</label>
                    <input type="password" name="password" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-600">確認 / Confirmation</label>
                    <input type="password" name="password_confirmation" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 w-full rounded-full">登録 / Sign up</button>
            </form>
        </div>
    </div>
@endsection
