@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="attendance__alert">
  // メッセージ機能
</div>

<body>
  <header class="header">
    <div class="header__inner">
      <div class="header-utilities">
        <a class="header__logo" href="/">
          PiGLy
        </a>
        <nav>
          <ul class="header-nav">
            @if (Auth::check())
            <li class="header-nav__item">
              <button class="header-nav__link" href="/wight_logs/goal_setting">目標体重設定</button>
            </li>
            <li class="header-nav__item">
              <form class="form" action="/logout" method="post">
              @csrf
                <button class="header-nav__button">ログアウト</button>
              </form>
            </li>
            @endif
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>
<a href=""></a>