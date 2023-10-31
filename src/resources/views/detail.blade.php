@extends('layouts.default')

@section('title', '店舗詳細ページ')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/detail.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/detail_all.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/detail_photo.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/detail_review.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/detail_callender.css')}}">
@endpush

@section('content')
<div class="detail">
    <div class="container">
    @include('components.search')
    <div class="tabs">
        <input id="all" type="radio" name="tab_item" checked>
        <label class="tab_item" for="all">総合</label>
        <input id="photo" type="radio" name="tab_item">
        <label class="tab_item" for="photo">写真</label>
        <input id="review" type="radio" name="tab_item">
        <label class="tab_item" for="review">口コミ</label>
        <div class="shop">
            <div class="shopMain flex_row_space-between">
                <div class="shopMain__right">
                    <h2 class="shop__name">{{$shop->name}}</h2>
                    <div class="rate-wrap">総合評価<span class="rate" style ="--score: {{ 1.5 }}"></span><span class="num">3.5</span></div>
                </div>
                <form action="" method="post" class="shopMain__left">
                    @csrf
                    <button>保存</button>
                </form>
            </div>
            <div class="shopInfo flex_row_start gap-20rem">
                <p class="shopInfo__gunre"><span class="font__bold label-margin-right">ジャンル:</span>{{$shop->gunre->name}}</p>
                <p class="shopInfo__price"><span class="font__bold label-margin-right">予算:</span>{{$shop->min_price}} 〜 {{$shop->max_price}}</p>
                <div class="shopInfo__rests"><span class="font__bold label-margin-right">定休日:</span>
                @foreach($shop->shopRests as $shopRest)
                    {{$shopRest->rest->name}}
                @endforeach
                </div>
            </div>
        </div>
        <div class="tab_content flex_row_space-between" id="all_content">
            総合の内容がここに入ります
        </div>
        <div class="tab_content flex_row_space-between" id="photo_content">
            プログラミングの内容がここに入ります
        </div>
        <div class="tab_content flex_row_space-between" id="review_content">
            デザインの内容がここに入ります
        </div>
    </div>
</div>
@endsection
