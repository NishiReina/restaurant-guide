@extends('layouts.default')

@section('title', '店舗登録')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/auth.css')}}">
@endpush

@section('content')
<div class="auth flex_column_center">

<h1 class="auth__headline">店舗登録</h1>

<form action="/register" method="post" class="h-adr auth__form form" enctype="multipart/form-data">
    @csrf
    <label for="name" class="auth__label">名前</label>
    <input id="name" type="text" name="name" value="{{ old('name') }}" class="auth__input auth__input--register" />
    @error('name')
        <p class="auth__error">
            {{$message}}
        </p>
    @enderror
    <label for="email" class="auth__label">メールアドレス</label>
    <input id="email" type="email" name="email" value="{{ old('email') }}" class="auth__input auth__input--register"/>
    @error('email')
        <p class="auth__error">
            {{$message}}
        </p>
    @enderror
    <label for="password" class="auth__label">パスワード</label>
    <input id="password" type="password" name="password" class="auth__input auth__input--register"/>
    @error('password')
        <p class="auth__error">
            {{$message}}
        </p>
    @enderror
    <label for="password_confirmation" class="auth__label">確認用パスワード</label>
    <input id="password_confirmation" type="password" name="password_confirmation" class="auth__input auth__input--register"/>

    <label for="tel" class="auth__label">電話番号</label>
    <input id="tel" name="phone" type="tel" value="{{ old('phone') }}" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" placeholder="012-3456-7890" class="auth__input auth__input--register">
    @error('phone')
        <p class="auth__error">
            {{$message}}
        </p>
    @enderror

    <span class="p-country-name" style="display:none;">Japan</span>
    <label for="postcode" class="auth__label">郵便番号</label>
    <input id="postcode" name="postcode" type="text" value="{{ old('passcode') }}" pattern="[0-9]{7}" placeholder="0000000" class="p-postal-code auth__input auth__input--register" size="7" maxlength="7">
    @error('postcode')
        <p class="auth__error">
            {{$message}}
        </p>
    @enderror

    <label for="address" class="auth__label">住所</label>
    <input id="address" name="address" type="text" value="{{ old('address') }}" class="p-region p-locality p-street-address p-extended-address auth__input auth__input--register">
    @error('address')
        <p class="auth__error">
            {{$message}}
        </p>
    @enderror

    <label class="auth__label">営業時間</label>
    <input name="start_time" type="time" value="{{ old('start_time') }}" class="auth__input auth__input--register">
    <input name="end_time" type="time" value="{{ old('end_time') }}" class="auth__input auth__input--register">
    @error('start_time')
        <p class="auth__error">
            {{$message}}
        </p>
    @enderror
    @error('end_time')
        <p class="auth__error">
            {{$message}}
        </p>
    @enderror

    <label class="auth__label">予算</label>
    <input name="min_price" type="number" value="{{ old('min_price') }}" class="auth__input auth__input--register">
    <input name="max_price" type="number" value="{{ old('max_price') }}" class="auth__input auth__input--register">
    @error('start_time')
        <p class="auth__error">
            {{$message}}
        </p>
    @enderror
    @error('end_time')
        <p class="auth__error">
            {{$message}}
        </p>
    @enderror

    <label for="area" class="auth__label">エリア</label>
    <select id="area" name="area_id" value="{{ old('area_id') }}" class="auth__input auth__input--register">
        <option hidden>選択してください</option>
        @foreach ($areas as $area)
        <option value="{{$area->id}}">{{$area->name}}</option>
        @endforeach
    </select>
    @error('area_id')
        <p class="auth__error">
            {{$message}}
        </p>
    @enderror

    <label for="gunre" class="auth__label">ジャンル</label>
    <select id="gunre" name="gunre_id" value="{{ old('gunre_id') }}" class="auth__input auth__input--register">
        <option hidden>選択してください</option>
        @foreach ($gunres as $gunre)
        <option value="{{$gunre->id}}">{{$gunre->name}}</option>
        @endforeach
    </select>
    @error('gunre_id')
        <p class="auth__error">
            {{$message}}
        </p>
    @enderror

    <label for="img_url" class="auth__label">画像</label>
    <input id="img_url" name="img_url" type="file" value="{{ old('img_url') }}" accept="image/png, image/jpeg, image/jpg" class="auth__input auth__input--register">
    @error('img_url')
        <p class="auth__error">
            {{$message}}
        </p>
    @enderror

    <label for="title" class="auth__label">タイトル</label>
    <input id="title" name="title" type="text" value="{{ old('title') }}" class="auth__input auth__input--register">
    @error('title')
        <p class="auth__error">
            {{$message}}
        </p>
    @enderror

    <label for="pr" class="auth__label">PR文</label>
    <input id="pr" name="pr" type="text" value="{{ old('pr') }}" class="auth__input auth__input--register">
    @error('pr')
        <p class="auth__error">
            {{$message}}
        </p>
    @enderror

    <button class="btn" >登録する</button>
</form>
<a href="/login" class="auth__link">ログインはこちら</a>
</div>
<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
@endsection