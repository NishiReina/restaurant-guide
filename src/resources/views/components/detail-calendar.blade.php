<section class="detail__calendar">
<!-- <div>
   <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ $calendar->getTitle() }}</div>
              <div class="card-body">
					      {!! $calendar->render() !!}
              </div>
          </div>
       </div>
   </div>
</div> -->
<div class="card">
    <div class="card-header text-center">
        <a class="btn btn-outline-secondary float-left" href="/detail/{{$shop->id}}?date={{$calendar->getPreviousMonth()}}">前の月</a>
        <!-- <a class="btn btn-outline-secondary float-left" href="/detail/{{$shop->id}}?date=previous">前の月</a> -->
        <span>{{ $calendar->getTitle() }}</span>
        <a class="btn btn-outline-secondary float-right" href="/detail/{{$shop->id}}?date={{$calendar->getNextMonth()}}">次の月</a>
        <!-- <a class="btn btn-outline-secondary float-right" href="/detail/{{$shop->id}}?date=after">次の月</a> -->
    </div>
    <div class="card-body">
        {!! $calendar->render() !!}
    </div>
</div>
</section>