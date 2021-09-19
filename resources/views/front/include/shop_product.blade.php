<div class="box-shop">
    <p align="right" dir="rtl" class="f-19 set-font"><span class="color-b-500">فروشگاه فروشنده </span><span>{{$user->name}}</span></p>
</div>
<div class="menu-view">
    <div class="view-menu-product" style="width: 100%">
        <div class="sm-filter">
            <div class="view-product-menu-search">
                @foreach($data as $i)
                    <div class="products-menu  @if($i->off > 0) border-off @endif">
                        <img class="img-product-menu" src="{{url('data/image/image product/').'/'.$i->image}}" alt="img-product-menu">
                        <a href="{{route('product.show' , ['slug'=>$i->slug])}}"><p  class="p-product-menu">{{$i->name}}</p></a>
                        @if($i->off > 0)
                            <div class="add-off-product">
                                <a class="number-off-price">{{$i->off}}%</a>
                                <p class="view-products-slider-price-back-off">{{$i->price}} تومان</p>
                            </div>
                        @endif
                        <?php
                        if ($i->off == 0) {
                            echo '<p class="price-product-menu">' . $i->price . 'تومان' . '</p>';
                        }

                        ?>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
