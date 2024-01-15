@extends('layouts.default')

@section('title', '店舗一覧')


@section('content')
<div class="request_list">
    <div class="container">
        <h1 class="page__title">店舗一覧</h1>
        <table class="design__table">
            <tr>
                <th></th>
                <th>店舗名</th>
                <th>ジャンル</th>
                <th>エリア</th>
                <th>詳細</th>
            </tr>
            @foreach($shops as $shop)
            <tr>
                <th>{{$shop->id}}</th>
                <td>{{$shop->name}}</td>
                <td>{{$shop->gunre->name}}</td>
                <td>{{$shop->area->name}}</td>
                <td><a href="">詳細</a></td>
            </tr>
            @endforeach
        </table>
        {{ $shops->links('vendor.pagination.default') }}
    </div>
</div>
@endsection
