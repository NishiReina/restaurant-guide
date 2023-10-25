@extends('layouts.default')

@section('title', 'トップページ')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/top.css')}}">
@endpush

@section('content')
<div class="top">
    <div class="mainview">
        <div class="container">
        @include('components.search')
        </div>
    </div>
    <div class="container">
        <div class="top__areas  flex_wrap_center">
            @foreach($regions as $region)
            <div class="area">
                <div class="region">{{$region->name}}</div>
                @foreach($region->areas as $area)
                <a class="prefecture" href="">{{$area->name}}</a>
                @endforeach
            </div>
            @endforeach
        </div>
        <div class="top__features flex_row_center">
            @foreach($features as $feature)
            <a  href="#" class="feature">
                <div class="feature__img">
                    <img src="{{$feature->img_url}}" alt="">
                </div>
                <p class="feature__ttl">{{$feature->content}}</p>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
