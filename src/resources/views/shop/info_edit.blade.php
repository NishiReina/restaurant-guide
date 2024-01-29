@extends('layouts.shop_default')

@section('title', '店舗情報編集ページ')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/info_edit.css')}}">
@endpush

@section('content')
<section class="info">
    <div class="container">
       <h1 class="page__title">店舗情報</h1>
        <form acttion="/shop/info/edit" method="post" class="info__wrap flex_column_center gap-40rem" enctype="multipart/form-data">
            @csrf
            <div class="info__item">
                <p class="item__title">メイン写真を編集する</p>
                <div class="main__img">
                    <img src="{{ \Storage::url($shop->img_url) }}" alt="メイン画像">
                </div>
                <label class="edit__img">
                    画像を選択する
                    <input name="img_url" type="file">
                </label>
            </div>
            <div class="info__item">
                <p class="item__title">お店のPRを編集する</p>
                <table class=excel__table>
                    <tr>
                        <th>タイトル</th>
                        <td><input class="excel__table--border" type="text" name="title" value="{{$shop->title}}"></td>
                    </tr>
                    <tr>
                        <th>PR</th>
                        <td><textarea class="excel__table--border" name="pr" cols="70" rows="10">{{$shop->pr}}</textarea></td>
                    </tr>
                </table>
            </div>
            <div class="info__item">
                <p class="item__title">お店のこだわりを編集する</p>
                <table class=excel__table>
                    <tr>
                        <th>こだわり</th>
                        <td>
                        @foreach($features as $feature)
                            <label class="excel__table--label">
                                {{$feature->content}}
                                <input class="excel__table--checkbox" type="checkbox" name="features[]" value="{{$feature->id}}" @if(in_array($feature->id, $feature_id_lists)) checked @endif>
                            </label>
                        @endforeach
                        </td>
                    </tr>
                </table>
            </div>
            <button class="btn">修正</button>
        </form>
    </div>
</section>
@endsection
