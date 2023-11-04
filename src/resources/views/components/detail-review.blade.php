<section>
    <div class="detail__review flex_column gap-30rem">
        <h3 class="user__title--small">口コミ</h3>
        @foreach($shop->getReviews() as $review)
        <div class="detail__review__wrap">
            <div class="detail__review__user">
                <span class="user__img">
                    @if($review->user->profile->img_url)
                    <img src="{{ \Storage::url($review->user->profile->img_url) }}" alt="">
                    @else
                    <img src="{{ asset('img/user.png') }}" alt="">
                    @endif
                </span>
                {{$review->user->name}}
            </div>
            <div class="detail__rate">
                <div class="rate-wrap small__rate-wrap">
                    <span class="rate small__rate" style ="--score: {{ $review->star }}"></span>
                    <span class="num">{{ $review->star }}</span>
                </div>
            </div>
            <div class="detail__review-text">
                <div  class="flex_column gap-15rem">
                    <p class="review__title">{{$review->title}}</p>
                    <p class="review__content">{{$review->content}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>