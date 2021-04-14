<header class="header-index-page">
    <div class="group-basket group-icon-header">
        <button class="btn-icon-card-min" @click="viewMinCard()"><i class="fas fa-shopping-bag icon-card-min" style="position: relative;
    right: 5px;"></i></button>

        @auth()
            <span class="basket-number">{{$my_basket_count}}</span>
        @if($my_basket_count > 0)
            <div style="cursor: default!important;" class="view-card-min">
                <span class="view-card-min-count-product">{{$my_basket_count}} کالا</span>
                <span class="view-card-min-view-all-product"><a href=""> <i class="fas fa-caret-left"></i>مشاهده سبد خرید</a></span>
                <div class="line"></div>
                <div class="view-products-card">
                    <ul class="item-card">
                        <?php
                        $price=0;
                        ?>
                        @foreach($all_item_card as $item)
                            @if($item->user_id == auth()->user()->id)
                            <?php
                                $price+=$item->total_price*$item->number;
                            ?>
                                <li>
                                    <img src="{{url('data/image/image product/').'/'.$item->products->image}}"
                                         alt="{{$item->products->name}}" title="{{$item->products->name}}">
                                    <span class="name-product-view-card"><a href="{{route('product.show' , ['slug'=>$item->products->slug])}}">{{$item->products->name}}</a></span>
                                    <span
                                        class="number-product-view-card">تعداد <span>{{$item->number}}</span></span>
                                    <i class="fas fa-trash-alt delete-product-card" title="حذف محصول"></i>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="line"></div>
                <div class="view-total-price">
                <span class="total-price">
                    مبلغ قابل پرداخت :
                    <br>
                    {{$price}} تومان
                </span>
                    <a href="{{route('user.card')}}" class="btn-buy-view-card">
                        ثبت سفارش
                    </a>
                </div>
            </div>
            @endif
        @endauth
    </div>

    @if(!auth()->check())
        <div class="group-user group-icon-header">
            <a class="btn-register" href="{{route('login')}}">
                <i class="fas fa-user"></i>
                <span>ورود به حساب کاربری</span>
            </a>
        </div>
    @else
        <div class="group-user group-icon-header">
            <button class="btn-register btn-register-ok" style="background-color: unset;outline: none;cursor: pointer">
                <i class="fas fa-user"></i>
                {{auth()->user()->name}}
            </button>
        </div>
        <div class="view-list-user-panel">
            <span>
                <p align="right">{{auth()->user()->name}}</p>
                <p align="right"><span class="view-card-min-view-all-product"><a href="{{route('user.profile')}}"> <i
                                class="fas fa-caret-left"></i>مشاهده پروفایل</a></span></p>
            </span>
            <div class="line"></div>
            <a href="">
                <p class="my-order-panel" align="right">
                    سفارشات من <i class="fas fa-folder-minus"></i>
                </p>
            </a>
            <div class="line"></div>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button class="btn-logout">خروج از حساب کاربری</button>
            </form>
        </div>
    @endif
    <div class="group-icon-header group-logo">
        <a href="{{ route('index.page') }}">
            <img class="logo-index-page" src="{{url('data/image/digikala-3.png')}}" alt="">
        </a>
    </div>
    <div class="group-icon-header group-input-search">
        <i class="fas fa-search"></i>
        <input v-model="text_search_index_page" @keyup="searchIndexPage" type="text" class="input-search-index-page" name="search-index-page"
               placeholder="جستوجو در دیجی کالا...">
    </div>
    <i class="fas fa-search btn-search-for-mobile"></i>
</header>
<div class="view-search-product"></div>
