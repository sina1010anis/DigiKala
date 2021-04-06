<div class="menu-view">
    <div class="view-menu-product">
        <div class="sm-filter">
            <p class="p-sm-filter" dir="rtl" align="right">
                <b>
                    <i class="fas fa-filter"></i>مرتب سازی بر اساس :
                </b>
                <button>جدیدترین</button>
                <button>گرانترین</button>
                <button>ارزانترین</button>
            </p>
            <div class="line"></div>
            <div class="view-product-menu-search">
                @foreach($data as $i)
                    <div class="products-menu  @if($i->off > 0) border-off @endif">
                        <img class="img-product-menu" src="{{url('data/image/image product/').'/'.$i->image}}"
                             alt="img-product-menu">
                        <a href="{{route('product.show' , ['slug'=>$i->slug])}}"><p class="p-product-menu">{{$i->name}}</p></a>
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
    <div class="view-menu-item-filter">
        <i class="fas fa-times"></i>
        @foreach($title_filter as $i)
            <div class="group-filter">
                <div class="group-title-filter">
                    <a class="title-name-filter text-right">{{$i->name}}</a>
                    <div class="line"></div>
                    <div class="item-filter">
                        <form @submit.prevent="test" action="">
                            <select name="" id="">
                                @foreach($attr_filter as $ii)
                                    @if($ii->title_filter_id == $i->id)
                                        <option value="{{$ii->id}}">{{$ii->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <button type="submit">اعمال فیلتر</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
