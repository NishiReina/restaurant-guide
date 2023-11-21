<form action="/shoplist" class="search flex_row_center" method="GET">
    @csrf
    <select name="area_id" id="area_id" class="search__select">
        <option value="" hidden>エリア</option>
        @foreach ($areas as $area)
        <option value="{{$area->id}}">{{$area->name}}</option>
        @endforeach
    </select>
    <select name="gunre_id" id="gunre_id" class="search__select">
        <option value="" hidden>ジャンル</option>
        @foreach ($gunres as $gunre)
        <option value="{{$gunre->id}}">{{$gunre->name}}</option>
        @endforeach
    </select>
    <input name="keyword" class="search__input" type="text" placeholder="キーワード">
    <button class="search__btn">検索</button>
</form>