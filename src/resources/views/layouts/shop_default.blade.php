<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css')}}">
    @stack('js')
    @stack('css')
</head>
<body>
    <header class="header flex_row_space-between align__items--center">
        <div class="header__left img">
            <img src="{{ asset('img/coachtech_white.png')}}" alt="コーチテックロゴ">
        </div>
        <div class="header__right flex_row_center">
            @if(Auth::guard('admin')->check())
                <form action="/admin/logout" method="post">
                    @csrf
                    <button class="btn">ログアウト</button>
                </form>
            </div>
            @elseif(Auth::guard('shop')->check())
                <form action="/shop/logout" method="post">
                    @csrf
                    <button class="btn">ログアウト</button>
                </form>
            @else
                <form action="/logout" method="post">
                    @csrf
                    <button class="btn">ログアウト</button>
                </form>
            @endif
        </div>
    </header>
    <main class="main  flex_row_space-between">
        <div class="main__left">
            <div class="sidbar">
                <ul>
                    <li>店舗ページ編集
                    <ul>
                        <li class="sidebar__list2"><a href="/shop">店舗トップ</a></li>
                        <li class="sidebar__list2"><a href="/shop/important">店舗重要情報</a></li>
                    </ul>
                    </li>
                    <li>ネット予約管理
                    <ul>
                        <li class="sidebar__list2"><a  href="/shop/important">予約カレンダー</a></li>
                        <li class="sidebar__list2"><a  href="/shop/reservation">本日の予約</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main__right">
            @yield('content')
        </div>
    </main>
    <footer class="footer"></footer>
</body>
</html>