@extends('layouts.default')

@section('title', 'ページが見つかりません')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/auth.css')}}">
@endpush

@section('content')
<div class="notfound flex_column_center">
    <div class="container">
        <h1 class="auth__headline">ページが見つかりません</h1>
    </div>
</div>
@endsection