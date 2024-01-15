@if(Auth::guard('shop'))
    @extends('layouts.shop_default')
@else
    @extends('layouts.default')
@endif

@section('title', '申請一覧ページ')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/request_list.css')}}">
@endpush

@section('content')
<div class="request_list">
    <div class="container">
        <h1 class="page__title">申請一覧</h1>
        <div class="list_tabs">
            <input id="unapproval" type="radio" name="tab_item" checked>
            <label class="list_tab_item" for="unapproval">未承認</label>
            <input id="approval" type="radio" name="tab_item">
            <label class="list_tab_item" for="approval">承認済み</label>
            <div class="list_tab_content flex_row_space-between" id="unapproval_content">
                <table class="design__table">
                    <tr>
                        <th></th>
                        <th>店舗名</th>
                        <th>申請内容</th>
                        <th>申請日時</th>
                        <th>詳細</th>
                    </tr>
                    @foreach($requests as $request)
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td>{{$request->shop->name}}</td>
                        <td>店舗重要情報変更依頼</td>
                        <td>{{$request->created_at}}</td>
                        <td><a href="/shop/request/detail/{{$request->id}}">詳細</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="list_tab_content flex_row_space-between" id="approval_content">
                <table class="design__table">
                    <tr>
                        <th></th>
                        <th>店舗名</th>
                        <th>申請内容</th>
                        <th>申請日時</th>
                        <th>詳細</th>
                    </tr>
                    @foreach($approvals as $approval)
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td>{{$approval->shop->name}}</td>
                        <td>店舗重要情報変更依頼</td>
                        <td>{{$approval->created_at}}</td>
                        <td><a href="/shop/important/">詳細</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
