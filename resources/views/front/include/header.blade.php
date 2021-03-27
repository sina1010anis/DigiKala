<header class="header-index-page">
    <div class="group-basket group-icon-header">
        <button class="btn-icon-card-min" @click="viewMinCard()"><i class="fas fa-shopping-bag icon-card-min" style="position: relative;
    right: 5px;"></i></button>

        @auth()
            <span class="basket-number">0</span>
            <div style="cursor: default!important;" class="view-card-min">
                <span class="view-card-min-count-product">1 کالا</span>
                <span class="view-card-min-view-all-product"><a href=""> <i class="fas fa-caret-left"></i>مشاهده سبد خرید</a></span>
                <div class="line"></div>
                <div class="view-products-card">
                    <ul class="item-card">
                        <li>
                            <img src="{{url('data/image/image product/product_1.jpg')}}"
                                 alt="کفش راحتی مردانه مدل PART-SO" title="کفش راحتی مردانه مدل PART-SO">
                            <span class="name-product-view-card">کفش راحتی مردانه مدل PART-SO</span>
                            <span class="number-product-view-card">تعداد <span>1</span></span>
                            <i class="fas fa-trash-alt delete-product-card" title="حذف محصول"></i>
                        </li>
                    </ul>
                </div>
                <div class="line"></div>
                <div class="view-total-price">
                <span class="total-price">
                    مبلغ قابل پرداخت :
                    <br>
                    25000 تومان
                </span>
                    <a href="" class="btn-buy-view-card">
                        ثبت سفارش
                    </a>
                </div>
            </div>
        @endauth
    </div>

    @if(!auth()->check())
        <div class="group-user group-icon-header">
            <a class="btn-register" href="">
                <i class="fas fa-user"></i>
                <span>ورود به حساب کاربری</span>
            </a>
        </div>
    @else
        <div class="group-user group-icon-header">
            <button class="btn-register" style="background-color: unset;outline: none;cursor: pointer">
                <i class="fas fa-user"></i>
                sina na
            </button>
        </div>
        <div class="view-list-user-panel">
            <span>
                <p align="right">sina na</p>
                <p align="right"><span class="view-card-min-view-all-product"><a href=""> <i class="fas fa-caret-left"></i>مشاهده پروفایل</a></span></p>
            </span>
            <div class="line"></div>
            <a href="">
                <p class="my-order-panel" align="right">
                    سفارشات من <i class="fas fa-folder-minus"></i>
                </p>
            </a>
            <div class="line"></div>
            <form action="">
                <button class="btn-logout">خروج از حساب کاربری</button>
            </form>
        </div>
    @endif
    <div class="group-icon-header group-logo">
        <a href="">
            <img class="logo-index-page" src="{{url('data/image/digikala-3.png')}}" alt="">
        </a>
    </div>
    <div class="group-icon-header group-input-search">
        <i class="fas fa-search"></i>
        <input type="text" class="input-search-index-page" name="search-index-page"
               placeholder="جستوجو در دیجی کالا...">
    </div>
    <i class="fas fa-search btn-search-for-mobile"></i>
</header>
