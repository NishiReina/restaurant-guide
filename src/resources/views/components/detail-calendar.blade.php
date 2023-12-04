<section class="detail__calendar">
<form method="post" action="/reserve?shop_id={{$shop->id}}" class="reserve">
    @csrf
<div class="card">
    <div class="card-header text-center">
        <div class="flex_row_space-between align__items--center">
        <span class="calendar__title">{{ $calendar->getTitle() }}</span>
        <div class="flex_wrap_center align__items--center gap-10rem">
            <a class="pagination__btn" href="/detail/{{$shop->id}}?date={{$calendar->getPreviousMonth()}}"><</a>
            <a class="pagination__btn" href="/detail/{{$shop->id}}?date={{$calendar->getNextMonth()}}">></a>
        </div>

        </div>
    </div>
    <div class="card-body">
        {!! $calendar->render() !!}
    </div>
</div>
<div class="reserve__item">
    <label class="reserve__field">人数：<input name="number" class="reserve__input" type="number"></label>
    <label class="reserve__field">時間：<input name="time" type="time" min="{{$shop->start_time}}" max="{{$shop->end_time}}" class="reserve__input"></label>
    @error('date')
    <div class="validation__error">
        {{$message}}
    </div>
    @enderror
    @error('number')
    <div class="validation__error">
        {{$message}}
    </div>
    @enderror
    @error('time')
    <div class="validation__error">
        {{$message}}
    </div>
    @enderror
</div>
<button class="btn reserve__btn">予約</button>
</form>
</section>