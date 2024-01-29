@extends('layouts.default')

@section('title', '予約一覧')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/shoplist.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/mypage.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/review.css')}}">
@endpush

@section('content')
<section class="profile">
    <div class="container">
        <h1 class="page__title">投稿内容</h1>
        <div class="shop__wrap mypage__shop flex_row_start">
            <div class="shop__left">
                <a href="/detail/{{$reservation->shop->id}}">
                    <span class="shop__img">
                        <img src="{{ \Storage::url($reservation->shop->img_url) }}" alt="">
                    </span>
                </a>
            </div>
            <div class="shop__right flex_column gap-20rem">
                <div class="flex_row_space-between">
                    <div class="flex_column gap-20rem">
                        <a href="/detail/{{$reservation->shop->id}}"class="shop__name">{{$reservation->shop->name}}</a>
                        <div class="small__rate-wrap">
                            <span class="small__rate" style ="--score: {{ $reservation->shop->getAvgStar() }}"></span>
                            <span class="num">{{ $reservation->shop->getAvgStar() }}</span>
                        </div>
                    </div>
                    <a href="/review/{{$reservation->id}}" class="review__btn">口コミを投稿する</a>
                </div>
                <div class="border"></div>
                <p class="shop__price">予算：<span>{{$reservation->shop->min_price}} ~ {{$reservation->shop->max_price}}</span></p>
                <p class="shop__pr">{{$reservation->shop->pr}}</p>
            </div>
        </div>
        <h1 class="review__page-title">口コミ投稿</h1>
        <form action="/review/{{$reservation->id}}" method="post" class="profile center flex_column gap-30rem" enctype="multipart/form-data">
            @csrf
            <div class="info__item">
                <label class="edit__img">
                    画像を選択する
                    <input name="img_url" type="file" multiple>
                </label>
            </div>
            <div class="info__item flex_column_center gap-20rem">
                    <div>
                        <label class="review__label">評価</label>
                        <input class="review__star" type="number" name="star" value="5" min="1" max="5">
                    </div>
                    <div>
                        <label class="review__label">タイトル</label>
                        <input class="review__input" type="text" name="title">
                    </div>
                    <div>
                        <label class="review__label">内容</label>
                        <textarea class="review__text" name="content" cols="70" rows="10"></textarea>
                    </div>
            </div>
            <button class="btn profile__btn">投稿する</button>
        </form>
    </div>
</section>
@endsection
