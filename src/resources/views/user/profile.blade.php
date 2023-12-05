@extends('layouts.default')

@section('title', '予約一覧')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css')}}">
@endpush

@section('content')
<section class="profile">
    <div class="container">
        <h1 class="page__title">プロフィール</h1>
        <form action="/profile" method="post" class="profile center" enctype="multipart/form-data">
            <div class="flex_row_space-between">
                <div class="user__img">
                    @if($user->profile->img_url)
                    <img src="{{ \Storage::url($user->profile->img_url) }}" alt="プロフィール画像">
                    @else
                    <img src="{{ asset('img/user.png') }}" alt="">
                    @endif
                </div>
                <label class="edit__img">
                    画像を選択する
                    <input type="file">
                </label>
            </div>
            <table class="simple__table">
            <tr>
                <th>名前</th>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <th>性別</th>
                <td><input name="gender" type="text" value="{{$user->profile->gender ? $user->profile->gender : '' }}"></td>
            </tr>
            <tr>
                <th>現住所</th>
                <td>
                    <input name="address" type="text" value="{{$user->profile->address ? $user->profile->address : '' }}">
                </td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td><input name="phone" type="text" value="{{$user->profile->phone ? $user->profile->phone : '' }}"></td>
            </tr>
            <tr>
                <th>生年月日</th>
                <td><input name="birthday" type="text" value="{{$user->profile->birthday ? $user->profile->birthday : '' }}"></td>
            </tr>
        </table>
    </form>
    </div>
</section>
@endsection
