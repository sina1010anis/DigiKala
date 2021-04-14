<div class="index-page-product">
    <div class="view-products-buy-good">
        <div class="view-img-buy-good">
            <img class="img-banner_buy_good" src="{{'data/image/image banner/banner_buy_good.png'}}" alt="">
        </div>
        <div class="view-product-buy-good-list">
            <div class="view-product-buy-good-list-all responsive">
                @foreach($discounted_products as $discounted_product)
                    <a href="{{route('product.show' , ['slug'=>$discounted_product->slug])}}"
                       class="view-product-buy-good-list-one">
                        <img src="{{url('data/image/image product/').'/'.$discounted_product->image}}" alt="">
                        <p class="view-products-slider-name set-font f-12" align="center">{{$discounted_product->name}}</p>
                        <div class="price-view-product-buy-good-list-one">
                            <span class="off-view-product-buy-good-list-one">{{$discounted_product->off}}%</span>
                            <span class="price-off-view-product-buy-good-list-one">{{$discounted_product->price}}</span>
                        </div>
                        <?php
                        $price_back = $discounted_product->price * ($discounted_product->off / 100);
                        $price_next = $discounted_product->price - $price_back;
                        echo '<p class="price-p-view-product-buy-good-list-one">' . $price_next . 'تومان' . '</p>'
                        ?>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="group-index-page-banner-up">
        @foreach($banner_ups as $banner_up)
            <span class="view-banner-up span-banner-up-1">
                    <img src="{{url('data/image/image banner').'/'.$banner_up->address}}" alt="{{$banner_up->alt}}"
                         title="{{$banner_up->title}}">
                </span>
        @endforeach
    </div>
    <div class="view-products-buy-good view-products-super">
        <div class="view-img-buy-good 2">
            <img class="img-banner_buy_good" src="{{'data/image/image banner/banner_super_index_page.png'}}" alt="">
        </div>
        <div class="view-product-buy-good-list view-product-buy-good-list2">
            <div class="view-product-buy-good-list-all responsive">
                @foreach($market_products as $discounted_product)
                    <a href="{{route('product.show' , ['slug'=>$discounted_product->slug])}}"
                       class="view-product-buy-good-list-one">
                        <img src="{{url('data/image/image product/').'/'.$discounted_product->image}}" alt="">
                        <p class="view-products-slider-name set-font f-12" align="center">{{$discounted_product->name}}</p>
                        <div class="price-view-product-buy-good-list-one">
                            @if($discounted_product->off > 0)
                                <span class="off-view-product-buy-good-list-one">{{$discounted_product->off}}%</span>
                                <span
                                    class="price-off-view-product-buy-good-list-one">{{$discounted_product->price}}</span>
                            @endif

                        </div>
                        <?php
                        if ($discounted_product->off > 0) {
                            $price_back = $discounted_product->price * ($discounted_product->off / 100);
                            $price_next = $discounted_product->price - $price_back;
                            echo '<p class="price-p-view-product-buy-good-list-one">' . $price_next . 'تومان' . '</p>';
                        } else {
                            echo '<p class="price-p-view-product-buy-good-list-one">' . $discounted_product->price . 'تومان' . '</p>';
                        }

                        ?>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="view-product-one">
        <div class="view-slider-products">
            <h3>کالا های دیجیتال</h3>
            <div class="line"></div>
            <div class="group-view-products-slider responsive-group2">
                @foreach($mobile_products as $mobile_product)
                    <span title="محصول test">
                        <img src="{{url('data/image/image product/').'/'.$mobile_product->image}}"
                             alt="{{$mobile_product->name}}" title="{{$mobile_product->name}}">
                        <a href="{{route('product.show' , ['slug'=>$mobile_product->slug])}}"><p class="view-products-slider-name" align="center">{{$mobile_product->name}}</p></a>
                        @if($mobile_product->off > 0)
                            <div class="add-off-product">
                                <a class="number-off-price">{{$mobile_product->off}}%</a>
                                <p class="view-products-slider-price-back-off">{{$mobile_product->price}} تومان</p>
                            </div>
                        @endif
                        <?php
                        if ($mobile_product->off > 0) {
                            $price_back = $mobile_product->price * ($mobile_product->off / 100);
                            $price_next = $mobile_product->price - $price_back;
                            echo '<p class="view-products-slider-price">' . $price_next . 'تومان' . '</p>';
                        } else {
                            echo '<p class="view-products-slider-price">' . $mobile_product->price . 'تومان' . '</p>';
                        }

                        ?>
                    </span>
                @endforeach
            </div>
        </div>
        <div class="view-timer-products ">
            <h3>کالا های دیجیتال</h3>
            <div class="group-off-product-mobile-index-page">
                <div class="responsive-group3">
                    @foreach($mobile_products as $mobile_product)
                        @if($mobile_product->off > 0)
                                <div class="item-off-mobile">
                                    <img src="{{url('data/image/image product/').'/'.$mobile_product->image}}" alt="">
                                    <a href="{{route('product.show' , ['slug'=>$mobile_product->slug])}}"><p class="view-products-slider-name" align="center">{{$mobile_product->name}}</p></a>
                                    <div class="add-off-product">
                                        <a class="number-off-price">{{$mobile_product->off}}%</a>
                                        <p class="view-products-slider-price-back-off">{{$mobile_product->price}}
                                            تومان</p>
                                    </div>

                                    <?php
                                    if ($mobile_product->off > 0) {
                                        $price_back = $mobile_product->price * ($mobile_product->off / 100);
                                        $price_next = $mobile_product->price - $price_back;
                                        echo '<p class="view-products-slider-price">' . $price_next . 'تومان' . '</p>';
                                    } else {
                                        echo '<p class="view-products-slider-price">' . $mobile_product->price . 'تومان' . '</p>';
                                    }

                                    ?>
                                </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="group-index-page-banner-up">
        @foreach($banner_centers as $banner_up)
            <span class="view-banner-up span-banner-up-1">
                    <img src="{{url('data/image/image banner').'/'.$banner_up->address}}" alt="{{$banner_up->alt}}"
                         title="{{$banner_up->title}}">
                </span>
        @endforeach
    </div>
    <div class="view-product-one">
        <div class="view-slider-products" style="width: 100%;">
            <h3>لوازم جانبی موبایل</h3>
            <div class="line"></div>
            <div class="group-view-products-slider responsive-group5">
                @foreach($mobile_tools as $mobile_product)
                    <span title="محصول test">
                        <img src="{{url('data/image/image product/').'/'.$mobile_product->image}}"
                             alt="{{$mobile_product->name}}" title="{{$mobile_product->name}}">
                        <a href="{{route('product.show' , ['slug'=>$mobile_product->slug])}}"><p class="view-products-slider-name" align="center">{{$mobile_product->name}}</p></a>
                        @if($mobile_product->off > 0)
                            <div class="add-off-product">
                                <a class="number-off-price">{{$mobile_product->off}}%</a>
                                <p class="view-products-slider-price-back-off">{{$mobile_product->price}} تومان</p>
                            </div>
                        @endif
                        <?php
                        if ($mobile_product->off > 0) {
                            $price_back = $mobile_product->price * ($mobile_product->off / 100);
                            $price_next = $mobile_product->price - $price_back;
                            echo '<p class="view-products-slider-price">' . $price_next . 'تومان' . '</p>';
                        } else {
                            echo '<p class="view-products-slider-price">' . $mobile_product->price . 'تومان' . '</p>';
                        }

                        ?>
                    </span>
                @endforeach
            </div>
        </div>
    </div>

    <div class="view-product-one">
        <div class="view-slider-products" style="width: 100%;">
            <h3>ساعت هوشمند</h3>
            <div class="line"></div>
            <div class="group-view-products-slider responsive-group5">
                @foreach($watch_products as $mobile_product)
                    <span title="محصول test">
                        <img src="{{url('data/image/image product/').'/'.$mobile_product->image}}"
                             alt="{{$mobile_product->name}}" title="{{$mobile_product->name}}">
                        <a href="{{route('product.show' , ['slug'=>$mobile_product->slug])}}"><p class="view-products-slider-name" align="center">{{$mobile_product->name}}</p></a>
                        @if($mobile_product->off > 0)
                            <div class="add-off-product">
                                <a class="number-off-price">{{$mobile_product->off}}%</a>
                                <p class="view-products-slider-price-back-off">{{$mobile_product->price}} تومان</p>
                            </div>
                        @endif
                        <?php
                        if ($mobile_product->off > 0) {
                            $price_back = $mobile_product->price * ($mobile_product->off / 100);
                            $price_next = $mobile_product->price - $price_back;
                            echo '<p class="view-products-slider-price">' . $price_next . 'تومان' . '</p>';
                        } else {
                            echo '<p class="view-products-slider-price">' . $mobile_product->price . 'تومان' . '</p>';
                        }

                        ?>
                    </span>
                @endforeach
            </div>
        </div>
    </div>

    <div class="view-product-one">
        <div class="view-slider-products" style="width: 100%;">
            <h3>اسپیکر</h3>
            <div class="line"></div>
            <div class="group-view-products-slider responsive-group5">
                @foreach($spicer_products as $mobile_product)
                    <span title="محصول test">
                        <img src="{{url('data/image/image product/').'/'.$mobile_product->image}}"
                             alt="{{$mobile_product->name}}" title="{{$mobile_product->name}}">
                        <a href="{{route('product.show' , ['slug'=>$mobile_product->slug])}}"><p class="view-products-slider-name" align="center">{{$mobile_product->name}}</p></a>
                        @if($mobile_product->off > 0)
                            <div class="add-off-product">
                                <a class="number-off-price">{{$mobile_product->off}}%</a>
                                <p class="view-products-slider-price-back-off">{{$mobile_product->price}} تومان</p>
                            </div>
                        @endif
                        <?php
                        if ($mobile_product->off > 0) {
                            $price_back = $mobile_product->price * ($mobile_product->off / 100);
                            $price_next = $mobile_product->price - $price_back;
                            echo '<p class="view-products-slider-price">' . $price_next . 'تومان' . '</p>';
                        } else {
                            echo '<p class="view-products-slider-price">' . $mobile_product->price . 'تومان' . '</p>';
                        }

                        ?>
                    </span>
                @endforeach
            </div>
        </div>
    </div>
</div>
