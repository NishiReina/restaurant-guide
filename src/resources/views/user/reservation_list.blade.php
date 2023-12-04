@extends('layouts.default')

@section('title', '予約一覧')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/user_reservation_list.css')}}">
@endpush

@section('content')
<section class="reservation_list">
    <div class="container">
    <h1 class="pate__title">予約一覧</h1>
    <div class="reservations">
        @foreach ($reservations as $reservation)
        <div class="reservation">
            <div class="reservation__status">
                @if($reservation->status == 0)
                <div class="reservation__status0">
                    予約中
                </div>
                @elseif($reservation->status == 1)
                <div class="reservation__status1">
                    来店済み
                </div>
                @else
                <div class="reservation__status2">
                    キャンセル
                </div>
                @endif
            </div>
            <div class="reservation__shop flex_row_space-between">
                <div class="left shop__img">
                    @if($reservation->shop->img_url)
                        <img src="{{ \Storage::url($reservation->shop->img_url) }}" alt="">
                    @endif
                </div>
                <div class="middle flex_column_center gap-20rem">
                    <h3 class="shop__name">{{$reservation->shop->name}}</h3>
                    <div class="shop__item">
                        <p class="reserve__column">来店日時</p>
                        <p class="reserve__value">{{$reservation->date}} {{$reservation->time}}</p>
                    </div>
                    <div class="shop__item">
                        <p class="reserve__column">来店人数</p>
                        <p class="reserve__value">{{$reservation->number}}</p>
                    </div>
                </div>
                <div class="right">
                    @if($reservation->status == 0)
                    <div class="reservation__status0">
                        予約内容確認・変更
                    </div>
                    @elseif($reservation->status == 1)
                    <div class="reservation__status1">
                        口コミを投稿
                    </div>
                    @else
                    <div class="reservation__status2">
                        もう一度予約
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
    </div>
</section>
@endsection
