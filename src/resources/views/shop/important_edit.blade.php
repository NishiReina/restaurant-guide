@extends('layouts.shop_default')

@section('title', '店舗重要情報依頼ページ')

@section('content')
<section class="shop_important">
    <div class="container">
       <h1 class="page__title">店舗重要情報</h1>
       <form action="/shop/important/request" method="post">
        @csrf
        <table class="excel__table">
            <tr>
                <th colspan="2">店舗重要情報</th>
            </tr>
            <tr>
                <th>店名</th>
                <td>
                    <input class="excel__table--border" name="name" type="text" value="{{$shop->name}}">
                </td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>
                    <input class="excel__table--border" name="phone" type="text" value="{{$shop->phone}}" maxlength="11">
                </td>
            </tr>
            <tr>
                <th>エリア</th>
                <td>
                <select class="excel__table--border" name="area_id" id="status" class="sell__select input">
                    <option hidden>選択してください</option>
                    @foreach ($areas as $area)
                    <option value="{{$area->id}}"  @if($area->id === $shop->area_id) selected @endif>{{$area->name}}</option>
                    @endforeach
                </select>
                </td>
            </tr>
            <tr>
                <th>郵便番号</th>
                <td>
                    <input class="excel__table--border" name="postcode" type="text" value="{{$shop->postcode}}" maxlength="7">
                </td>
            </tr>
            <tr>
                <th>住所</th>
                <td>
                    <input class="excel__table--border" name="address" type="text" value="{{$shop->address}}">
                </td>
            </tr>
            <tr>
                <th>営業時間</th>
                <td>
                    開始<span class="excel__table--border">
                    <input name="start_time" type="time" value="{{$shop->start_time}}"></span>
                    終了<span class="excel__table--border">
                    <input  name="end_time" type="time" value="{{$shop->end_time}}"></span>
                </td>
            </tr>
            <tr>
                <th>定休日</th>
                <td>
                    @foreach($rests as $rest)
                    <label>
                        {{$rest->name}}
                        <input type="checkbox" name="rests[]" value="{{$rest->id}}" @if(in_array($rest->id, $rest_id_lists)) checked @endif>
                    </label>
                    @endforeach
                </td>
            </tr>
            <tr>
                <th>ジャンル</th>
                <td>
                    <select class="excel__table--border" name="gunre_id" id="status" class="sell__select input">
                        <option hidden>選択してください</option>
                        @foreach ($gunres as $gunre)
                        <option value="{{$gunre->id}}"  @if($shop->gunre_id === $gunre->id) selected @endif>{{$gunre->name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>予算</th>
                <td>最低額<input name="min_price" type="number" class="excel__table--border" value="{{$shop->min_price}}">最高額<input name="max_price" type="number" class="excel__table--border" value="{{$shop->max_price}}"></td>
            </tr>
        </table>
        <button href="#" class="simple__btn">
            申請
        </button>
    </form>
    </div>
</section>
@endsection
