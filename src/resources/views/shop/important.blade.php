@extends('layouts.shop_default')

@section('title', '店舗重要情報')

@section('content')
<section class="shop_important">
    <div class="container">
       <h1 class="page__title">店舗重要情報</h1>
       <table class="excel__table">
        <tr>
            <th colspan="2">店舗重要情報</th>
        </tr>
        <tr>
            <th>店名</th>
            <td>
                {{$shop->name}}
            </td>
        </tr>
        <tr>
            <th>電話番号</th>
            <td>{{$shop->phone}}</td>
        </tr>
        <tr>
            <th>郵便番号</th>
            <td>{{$shop->postcode}}</td>
        </tr>
        <tr>
            <th>住所</th>
            <td>{{$shop->address}}</td>
        </tr>
        <tr>
            <th>営業時間</th>
            <td>開始<span class="excel__table--border">{{$shop->start_time}}</span>終了<span class="excel__table--border">{{$shop->end_time}}</span></td>
        </tr>
        <tr>
            <th>定休日</th>
            <td>
                @foreach($shop->shopRests as $rest)
                <span class="excel__table--rounded">{{$rest->rest->name}}</span>
                @endforeach
            </td>
        </tr>
        <tr>
            <th>ジャンル</th>
            <td>
                <span class="excel__table--rounded">{{$shop->gunre->name}}</span>
            </td>
        </tr>
        <tr>
            <th>予算</th>
            <td>最低額<span class="excel__table--border">{{$shop->min_price}}</span>最高額<span class="excel__table--border">{{$shop->max_price}}</span></td>
        </tr>
    </table>
    @if(Auth::guard('admin')->check())
    <form method="POST" action="/admin/request/approve/{{$shop->id}}">
        @csrf
        <button class="simple__btn">承認する</button>
    </form>
    @elseif(Auth::guard('shop')->check())
    <a href="/shop/important/edit" class="simple__btn">
        修正する
    </a>
    @endif
    </div>
</section>
@endsection
