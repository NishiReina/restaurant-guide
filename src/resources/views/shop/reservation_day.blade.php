@extends('layouts.shop_default')

@section('title', '店舗重要情報変更依頼詳細')

@section('content')
<section class="shop_important">
    <div class="container">
        <h1 class="page__title">予約カレンダー</h1>
        <div class="pagination flex_row_space-between align__items--center">
            <a href='/shop/reservation/{{$ymd->copy()->subDay()->format("Y-m-d")}}' class="pagenation__btn"><span class="pagenation__arrow"><</span></a>
            <p class="show__month">{{$ymd->copy()->format("Y年n月j日")}}</p>
            <a href='/shop/reservation/{{$ymd->copy()->addDay()->format("Y-m-d")}}' class="pagenation__btn"><span class="pagenation__arrow">></span></a>
        </div>
        <table class="design__table">
            <tr>
                <th></th>
                <th>来店者名</th>
                <th>来店日</th>
                <th>来店時刻</th>
                <th>来店人数</th>
                <th>詳細</th>
            </tr>
            @foreach($reservations as $reservation)
            <tr>
                <th>{{$reservation->id}}</th>
                <td>{{$reservation->shop->name}}</td>
                <td>{{$reservation->date}}</td>
                <td>{{$reservation->time}}</td>
                <td>{{$reservation->number}}</td>
                <td><a href="/reserve/{{$reservation->id}}">詳細</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</section>
@endsection