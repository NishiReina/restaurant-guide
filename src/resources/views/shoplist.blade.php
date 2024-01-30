@extends('layouts.default')

@section('title', '店舗一覧ページ')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/shoplist.css')}}">
@endpush

@push('js')
{{-- <script src="{{ asset('js/modal.js')}}"></script> --}}
@endpush

@section('content')
<div class="shoplist">
    <div class="container">
    @include('components.search')
    <div class="sort__tab">
        <h2 class="sort__title">
            @if($request->area)
                {{$request->area}}の
            @endif
            @if($request->gunre)
                {{$request->gunre}}の
            @endif
            お店
        </h2>
        <a class="tab_item {{$request->sort === 'recommend' || !isset($request->sort) ? 'tab_item--checked' : '' }}" href="{{ route('shoplist', ['area_id' => $request->area_id, 'gunre_id' => $request->gunre_id, 'keyword' => $request->keyword, 'sort' => 'recommend' ]) }}">おすすめ</a>
        <a class="tab_item {{$request->sort === 'ranking' ? 'tab_item--checked' : '' }}" href="{{ route('shoplist', ['area_id' => $request->area_id, 'gunre_id' => $request->gunre_id, 'keyword' => $request->keyword, 'sort' => 'ranking' ]) }}">ランキング</a>
        <a class="tab_item {{$request->sort === 'review' ? 'tab_item--checked' : '' }}" href="{{ route('shoplist', ['area_id' => $request->area_id, 'gunre_id' => $request->gunre_id, 'keyword' => $request->keyword, 'sort' => 'review' ]) }}">口コミが多い順</a>
    </div>
    <hr class="hr">
    <div class="shops">
        @foreach($shops as $shop)
        <div class="shop">
            <div class="shop__wrap flex_row_start">
                <div class="shop__left">
                    <a href="/detail/{{$shop->id}}">
                        <span class="shop__img">
                            @if($shop->img_url)
                            <img src="{{ \Storage::url($shop->img_url) }}" alt="">
                            @else
                            <img src="{{ asset('img/user.png') }}" alt="">
                            @endif
                        </span>
                    </a>
                </div>
                <div class="shop__right flex_row_space-between">
                    <div class="flex_column gap-20rem">
                        <a href="/detail/{{$shop->id}}"class="shop__name">{{$shop->name}}</a>
                        <div class="small__rate-wrap">
                            <span class="small__rate" style ="--score: {{ $shop->getAvgStar() }}"></span>
                            <span class="num">{{ $shop->getAvgStar() }}</span>
                        </div>
                        <div class="border"></div>
                        <p class="shop__price">予算：<span>{{$shop->min_price}} ~ {{$shop->max_price}}</span></p>
                        <p class="shop__pr">{{$shop->pr}}</p>
                    </div>
                    @if($shop->isBookMark())
                    <form action="/delete-bookmark/{{$shop->id}}" method="POST">
                        @csrf
                        <button><img src="{{asset('img/bookmark-on.png')}}" alt=""></button>
                    </form>
                    @else
                    <form action="/bookmark/{{$shop->id}}" method="POST">
                        @csrf
                        <button><img src="{{asset('img/bookmark-off.png')}}" alt=""></button>
                    </form>
                    @endif
                </div>
            </div>
            <form class="reservation" action="/">
                <div class="reseevation__wrap flex_row_center">
                    <div class="reservation__left flex_row_center align__items--center font__bold">ネット予約</div>
                    <div class="reservation__right flex_row_start">
                        @foreach($week as $day)
                        <div onClick="openModal({{$shop->id}},`{{$day['date']}}`)" class="reservation__right-item">
                            <div class="reservation__right--top flex_row_center align__items--center font__bold">{{$day['dayOfWeek']}}</div>
                            <div class="reservation__right--bottom flex_column_center gap-10rem"><span>{{$day['date']}}</span>○</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </form>
        </div>
        @endforeach
        <form id="reserve_modal" class="reserve_modal flex_column_center gap-40rem" action="/reserve" method="POST" accept-charset="Shift_JIS">
            @csrf
            <h2 class="modal__title">予約</h2>
            <div class="flex_row_between gap-20rem">
                <input id="shop_id" type="hidden" name="shop_id">
                <label class="modal__field">
                    日付：
                    <input id="date" name="date" id="date" type="date">
                </label>
                @error('date')
                    <p class="error">{{$message}}</p>
                @enderror
                <label class="modal__field">
                    人数：
                    <input class="modal__input" name="number" type="number">
                </label>
                @error('number')
                    <p class="error">{{$message}}</p>
                @enderror
                <label class="modal__field">
                    時間：
                    <input class="modal__input" name="time" type="time">
                </label>
                @error('time')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>
            <button class="btn">予約する</button>
        </form>
    </div>
    </div>
</div>
<script src="{{ asset('js/modal.js')}}"></script>
@endsection
