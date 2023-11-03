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
        <section class="shop">
            <div class="shopMain flex_row_space-between">
                <div class="shopMain__right">
                    <h2 class="shop__name">{{$shop->name}}</h2>
                    <div class="rate-wrap"><span class="rate" style ="--score: {{ 1.5 }}"></span><span class="num">3.5</span></div>
                </div>
                <form action="" method="post" class="shopMain__left flex_row_space-between">
                    @csrf
                    <div class="shop__save"><img src="../img/bookmark-off.png" alt=""></div>
                    <button class="shop__save--btn">保存</button>
                </form>
            </div>
            <hr>
            <div class="shopInfo flex_row_start gap-20rem">
                <p class="shopInfo__gunre"><span class="font__bold label-margin-right">ジャンル:</span>{{$shop->gunre->name}}</p>
                <p class="shopInfo__price"><span class="font__bold label-margin-right">予算:</span>{{$shop->min_price}} 〜 {{$shop->max_price}}</p>
                <div class="shopInfo__rests"><span class="font__bold label-margin-right">定休日:</span>
                @if(!$shop->shopRests)
                    @foreach($shop->shopRests as $shopRest)
                        {{$shopRest->rest->name}}
                    @endforeach
                @else
                定休日なし
                @endif
                </div>
            </div>
        </section>
        <div class="tab_content flex_row_space-between" id="all_content">
            <x-detail-all :shop="$shop"></x-detail-all>
            <x-detail-callender></x-detail-callender>
        </div>
        <div class="tab_content flex_row_space-between" id="photo_content">
            <x-detail_photo></x-detail_photo>
            <x-detail-callender></x-detail-callender>
        </div>
        <div class="tab_content flex_row_space-between" id="review_content">
            <x-detail-review></x-detail-review>
            <x-detail-callender></x-detail-callender>
        </div>
    </div>
</div>
@endsection
