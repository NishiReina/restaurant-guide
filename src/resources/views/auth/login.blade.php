@extends('layouts.default')

@section('title', 'ログイン')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/auth.css')}}">
@endpush

@section('content')
<div class="container">
<div class="auth flex_column_center">

@if( isset($guard) && ($guard == 'admin'))
<h1 class="auth__headline">管理者ログイン</h1>
<form action="{{ route('admin.login') }}" method="post" class="auth__form form">
@elseif( isset($guard) && ($guard == 'shop'))
<h1 class="auth__headline">店舗ログイン</h1>
<form action="{{ route('shop.login') }}" method="post" class="auth__form form">
@else
<h1 class="auth__headline">ログイン</h1>
<form action="{{ route('login') }}" method="post" class="auth__form form">
@endisset

    @csrf
    <label for="email" class="auth__label">メールアドレス</label>
    <input id="email" type="email" name="email" value="{{ old('email') }}" class="auth__input" placeholder="メールアドレスを入力してください"/>
    @error('email')
        <p class="auth__error">
            {{$message}}
        </p>
    @enderror
    <label for="password" class="auth__label">パスワード</label>
    <input id="password" type="password" name="password" class="auth__input" placeholder="パスワードを入力してください"/>
    @error('password')
        <p class="auth__error">
            {{$message}}
        </p>
    @enderror
    <button class="btn" >ログイン</button>
</form>
<a href="/register" class="auth__link">新規登録はこちら</a>

</div>
</div>
@endsection
