<nav class="nax-bar-index-page">
    <div class="group-location group-icon-header">
        <i class="fas fa-search-location"></i><span>  انتخاب شهر  </span>
    </div>
    <div class="group-menu-index-page group-icon-header">
        <img class="logo-index-page logo-index-page-menu" src="{{url('data/image/digikala-3.png')}}" alt="">
        <ul class="ul-nav-bar">
            <li @mouseover='viewMenuBar'><span class="li-action-edit"> دسته بندی <i class="fas fa-bars"></i> </span>
            </li>
            @foreach($min_menus as $min_menu)
                @if($min_menu->icon != '0')
                    <li><span> {{$min_menu->name}} <i class="{{$min_menu->icon}}"></i> </span></li>
                @else
                    <li><span> {{$min_menu->name}}</span></li>
                @endif
            @endforeach
        </ul>
    </div>
    <button @click="viewMenuFotMobile" class="btn-btn-search-for-mobile-menu">
        <i style="position: relative;top: 0px!important;"
           class="fas fa-bars btn-search-for-mobile btn-search-for-mobile-menu"></i>
    </button>
</nav>
<div class="view-all-menu-item">
    <div style="z-index: 2" class="group-item-all-menu">
        @foreach($sub_all_menus as $sub_all_menu)
            <span v-if="{{$sub_all_menu->all_menu_id}} == all_menu_id" class="group-item-select-menu">
            <h4> <i class="fas fa-angle-down"></i> {{$sub_all_menu->name}} </h4>
                @foreach($sub_all_menu->down_all_menus as $name)
                    <a style="color: #585858" href="{{route('menu_view' , ['slug'=>$name->slug])}}"><p align="right">{{$name->name}}</p></a>
                @endforeach
<!--            <p align="right">موبایل</p>
            <p align="right">موبایل</p>
            <p align="right">موبایل</p>
            <p align="right">موبایل</p>
            <p align="right">موبایل</p>
            <p align="right">موبایل</p>-->
        </span>
        @endforeach
    </div>
    <div style="
z-index: 2" class="group-item-navbar">
        <button class="none-btn" @click="hideMenuBar">
            <i class="fas fa-chevron-up icon-exit-all-menu"></i>
        </button>
        @foreach($all_menus as $all_menu)
            <div @mouseover="setIdAllMenu({{$all_menu->id}})">{{$all_menu->name}} <i class="{{$all_menu->icon}}"></i>
            </div>
        @endforeach
    </div>

</div>
<div @click="hideMenu" class="blur-web"></div>
