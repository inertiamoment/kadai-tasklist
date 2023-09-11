<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;                        // 追加
use App\Models\User;                                        // 追加

class UsersController extends Controller
{
    public function index()                                 // 追加       
    {                                                       // 追加
    if (Auth::check()) { // 認証済みの場合
        // 認証済みユーザを取得
        $user = Auth::user();
        // ユーザのタスクの一覧を作成日時の降順で取得
        $tasks = $user->tasks()->orderBy('created_at', 'desc')->paginate(10);
        return view('tasks.index', ['user' => $user, 'tasks' => $tasks]);
    } else {
        // ログインしていない場合はログインページにリダイレクト
        return redirect()->route('login');
    
    public function show($id)
    {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);

        // ユーザ詳細ビューでそれを表示
        return view('users.show', [
            'user' => $user,
        ]);
    }
}