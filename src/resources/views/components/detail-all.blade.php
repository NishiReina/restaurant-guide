<section class="all flex_column gap-40rem">
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <div class="all__img">
        <img src="{{ \Storage::url($shop->img_url) }}" alt="商品画像">
    </div>
    <div class="all__pr">
        {{$shop->pr}}
    </div>
    <hr>
    <div class="flex_column gap-30rem">
    <h3 class="user__title--small">店舗基本情報</h3>
    <table class="all__shopInfo">
        <tr class="shopInfo__tr">
            <th class="shopInfo__th">店名</th>
            <td class="shopInfo__td">{{$shop->name}}</td>
        </tr>
        <tr class="shopInfo__tr">
            <th class="shopInfo__th">ジャンル</th>
            <td class="shopInfo__td">{{$shop->gunre->name}}</td>
        </tr>
        <tr class="shopInfo__tr">
            <th class="shopInfo__th">住所</th>
            <td class="shopInfo__td">{{$shop->address}}</td>
        </tr>
        <tr class="shopInfo__tr">
            <th class="shopInfo__th">電話番号</th>
            <td class="shopInfo__td">{{$shop->phone}}</td>
        </tr>
        <tr class="shopInfo__tr">
            <th class="shopInfo__th">営業時間</th>
            <td class="shopInfo__td">{{$shop->start_time}}~{{$shop->end_time}}</td>
        </tr>
        <tr class="shopInfo__tr">
            <th class="shopInfo__th">予算</th>
            <td class="shopInfo__td">{{$shop->min_price}}~{{$shop->max_price}}</td>
        </tr>
    </table>
    </div>
    <hr>
    <div class="all__review flex_column gap-30rem">
        <h3 class="user__title--small">口コミ</h3>
        @foreach($shop->pickups as $pickup)
        <div class="review__wrap">
            <div class="review__user">
                <span class="user__img">
                    @if($pickup->review->user->profile->img_url)
                    <img src="{{ \Storage::url($pickup->review->user->profile->img_url) }}" alt="">
                    @else
                    <img src="{{ asset('img/user.png') }}" alt="">
                    @endif
                </span>
                {{$pickup->review->user->name}}
            </div>
            <div class="review">
                <div  class="flex_column gap-15rem">
                    <div class="rate-wrap small__rate-wrap">
                        <span class="rate small__rate" style ="--score: {{ $pickup->review->star }}"></span>
                        <span class="num">{{ $pickup->review->star }}</span>
                    </div>
                    <p class="review__title">{{$pickup->review->title}}</p>
                    <p class="review__content">{{$pickup->review->content}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>