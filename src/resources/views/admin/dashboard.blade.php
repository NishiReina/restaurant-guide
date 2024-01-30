@extends('layouts.default')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css')}}">
@endpush

@section('title', '管理画面トップページ')

@section('content')
<div class="dashboard">
    <div class="container">
        <div class="dashboard__wrap">
            <h1 class="page__title">管理画面トップページ</h1>
            <div class="flex_row_space-between">
                <a class="board" href="admin/shop/register">
                    <img src="{{asset('img/icon_register.png')}}" alt="">
                    <span class="board__title">店舗登録</span>
                </a>
                <a class="board" href="admin/request/list">
                    <img src="{{asset('img/icon_list.png')}}" alt="">
                    <span class="board__title">申請一覧</span>
                </a>
                <a class="board" href="admin/shop/list">
                    <img src="{{asset('img/icon_shop.png')}}" alt="">
                    <span class="board__title">店舗一覧</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
