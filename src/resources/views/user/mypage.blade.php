@extends('layouts.default')

@section('title', '予約一覧')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/shoplist.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/mypage.css')}}">
@endpush

@section('content')
<section class="profile">
    <div class="container">
        <div class="flex_row_start align__items--center gap-40rem">
            <div class="user__img">
                @if($user->profile->img_url)
                <img src="{{ \Storage::url($user->profile->img_url) }}" alt="プロフィール画像">
                @else
                <img src="{{ asset('img/user.png') }}" alt="">
                @endif
            </div>
            <a class="edit__img">プロフィールを編集</a>
        </div>
        <div class="list_tabs">
            <input id="tab1" type="radio" name="tab_item" checked>
            <label class="list_tab_item" for="tab1">行ったお店</label>
            <input id="tab2" type="radio" name="tab_item">
            <label class="list_tab_item" for="tab2">保存した店</label>
            <input id="tab3" type="radio" name="tab_item">
            <label class="list_tab_item" for="tab3">予約履歴</label>
            <div class="list_tab_content flex_column gap-30rem" id="tab1_content">
                @foreach($gone_reservations as $reservation)
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
                @endforeach
            </div>
            <div class="list_tab_content flex_column" id="tab2_content">
                い
            </div>
            <div class="list_tab_content flex_column" id="tab3_content">
                @foreach($reservations as $reservation)
                <div class="shop__wrap mypage__shop flex_row_start">
                    <div class="shop__left">
                        <a href="/detail/{{$reservation->shop->id}}">
                            <span class="shop__img">
                                <img src="{{ \Storage::url($reservation->shop->img_url) }}" alt="">
                            </span>
                        </a>
                    </div>
                    <div class="shop__right flex_column gap-20rem">
                        <a href="/detail/{{$reservation->shop->id}}"class="shop__name">{{$reservation->shop->name}}</a>
                        <div class="small__rate-wrap">
                            <span class="small__rate" style ="--score: {{ $reservation->shop->getAvgStar() }}"></span>
                            <span class="num">{{ $reservation->shop->getAvgStar() }}</span>
                        </div>
                        <div class="border"></div>
                        <p class="shop__price">予算：<span>{{$reservation->shop->min_price}} ~ {{$reservation->shop->max_price}}</span></p>
                        <p class="shop__pr">{{$reservation->shop->pr}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
@endsection
