<nav class="nax-bar-index-page nav-bar-shop-seller">
    <div class="group-menu-index-page group-icon-header">
        <img class="logo-index-page logo-index-page-menu" src="{{url('data/image/digikala-3.png')}}" alt="">
        <ul class="ul-nav-bar">
            <li ><span class="li-action-edit"> پنل فروشنده <i class="fas fa-bars"></i> </span>
            </li>
            <li class="color-b-700"><a href="{{route('shop.index')}}">محصولات</a></li>
            <li class="color-b-700"><a href="{{route('shop.buy')}}">فروش های موفق</a></li>
            <li class="color-b-700"><a href="{{route('shop.profile')}}">مشخصات</a></li>
        </ul>
    </div>
    <button @click="viewMenuFotMobile" class="btn-btn-search-for-mobile-menu">
        <i style="position: relative;top: 0px!important;"
           class="fas fa-bars btn-search-for-mobile btn-search-for-mobile-menu"></i>
    </button>
</nav>
