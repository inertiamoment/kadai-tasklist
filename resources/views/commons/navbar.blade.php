<header class="mb-4">
    <nav class="navbar bg-neutral text-neutral-content">
        {{-- トップページへのリンク --}}
        <div class="flex-1">
            <h1><a class="btn btn-ghost normal-case text-xl" href="/">TaskList</a></h1>
        </div>

        <div class="flex-none">
            <ul tabindex="0" class="menu hidden lg:menu-horizontal">
                <li class="nav-item active">
                    <a class="nav-link" href="/">ホーム</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tasks">タスク一覧</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tasks/create">タスク作成</a>
                </li>
            </ul>
            <div class="dropdown dropdown-end">
                <button type="button" tabindex="0" class="btn btn-ghost normal-case font-normal lg:hidden">
                    @if (Auth::check())
                        {{ Auth::user()->name }}
                    @else
                        Guest
                    @endif
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52 text-info">
                    @if (Auth::check())
                        <li><a href="{{ route('profile.edit') }}" class="nav-link">プロフィール</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="nav-link">ログアウト</button>
                            </form>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}" class="nav-link">ログイン</a></li>
                        <li><a href="{{ route('register') }}" class="nav-link">登録</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
