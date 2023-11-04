<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css')}}">
    @stack('css')
    @stack('js')
</head>
<body>
    <header class="header flex_row_space-between align__items--center">
        <div class="header__left img">
            <img src="{{ asset('img/coachtech_white.png')}}" alt="コーチテックロゴ">
        </div>
        @if(Auth::guard('admin')->check())
        <div class="header__right flex_row_center">
            <form action="/logout" method="post">
                @csrf
                <button class="btn">ログアウト</button>
            </form>
        </div>
        @else
        <div class="header__right flex_row_center">
                @csrf
                <button class="btn">ログアウト</button>
            </form>
        </div>
        @endif
    </header>
    @yield('content')
    <footer class="footer"></footer>
</body>
</html>