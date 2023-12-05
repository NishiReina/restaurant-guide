@extends('layouts.default')

@section('title', '予約詳細')

@section('content')
<section class="reservation_detail">
    <div class="container">
    <h1 class="page__title">ご予約内容の確認・変更</h1>
        <h3 class="small__title">ご予約情報</h3>
    <table class="simple__table">
        <tr>
            <th>ご予約ステータス</th>
            <td>
                @if($reservation->status == 0)
                    予約中
                @elseif($reservation->status == 1)
                    来店済み
                @else
                    キャンセル
                @endif
            </td>
        </tr>
        <tr>
            <th>レストラン名</th>
            <td>{{$reservation->shop->name}}</td>
        </tr>
        <tr>
            <th>来店人数</th>
            <td>{{$reservation->number}}</td>
        </tr>
        <tr>
            <th>来店日</th>
            <td>{{$reservation->date}}</td>
        </tr>
        <tr>
            <th>来店時刻</th>
            <td>{{$reservation->time}}</td>
        </tr>
    </table>
    </div>
</section>
@endsection
