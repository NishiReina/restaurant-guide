@extends('layouts.shop_default')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/detail_calendar.css')}}">
@endpush

@section('title', '予約カレンダー')

@section('content')
<section class="shop_important">
    <div class="container">
       <h1 class="page__title">予約カレンダー</h1>
       <div class="full card">
            <div class="card-header text-center">
                <div class="flex_row_space-between align__items--center">
                <span class="calendar__title">{{ $calendar->getTitle() }}</span>
                <div class="flex_wrap_center align__items--center gap-10rem">
                    <a class="pagination__btn" href="/shop/calendar?date={{$calendar->getPreviousMonth()}}"><</a>
                    <a class="pagination__btn" href="/shop/calendar?date={{$calendar->getNextMonth()}}">></a>
                </div>
        
                </div>
            </div>
            <div class="card-body">
                {!! $calendar->render() !!}
            </div>
        </div>
    </div>
</section>
@endsection
