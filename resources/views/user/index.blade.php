<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>صفحه شخصی{{auth()->user()->name}}</title>
    <script src="https://kit.fontawesome.com/d4c29863c5.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="shit">
    <div id="row">
        <div id="app">
            @include('front.include.header')
            @include('front.include.navbar')
            @if(session('msg'))
                <div align="center" class="set-font f-14 color-b-100 show-msg" >{{session('msg')}}</div>
                @endif
            <div class="group-profile-user">
                <div>
                    <div class="view-option-profile">
                        <i @click="showMenuForMobile" class="fas fa-ellipsis-v fl-right color-b-700"></i>
                        <div class="fl-left" style="padding: 10px;box-sizing: border-box">
                            @yield('index_user')
                        </div>
                    </div>
                    <div class="view-menu-profile">
                        <div class="fl-right">
                <span class="group-view-index-profile">
                    <i @click="hideMenuForMobile" class="fas fa-chevron-up IconHideMenuForMobile"></i>
                    <img src="{{url('data/image/icon/icon_user.svg')}}" alt="">
                    <span class="text-view-profile f-12 set-font color-b-800 fl-right">{{auth()->user()->name}}</span>
                    <br>
                    <br>
                    @if(auth()->user()->mobile == 'null')
                        <span
                            class="text-view-profile f-12 set-font color-b-600 fl-right"><a
                                href="{{route('user.view')}}">لصفا شماره موبایل خود را وارد کنید</a></span>
                    @else
                        <span
                            class="text-view-profile f-12 set-font color-b-600 fl-right">{{auth()->user()->mobile}}</span>
                    @endif
                </span>
                            <div class="line"></div>
                            <div class="group-view-menu-profile">
                                <ul>
                                    <li class="set-font f-14" dir="rtl"><a class="color-b-700"
                                                                           href="{{route('user.order')}}"> <i
                                                class="fas fa-book"></i><span style="margin: 0 15px">سفارش های من</span></a>
                                    </li>
                                    <li class="set-font f-14" dir="rtl"><a class="color-b-700"
                                                                           href="{{route('user.list')}}"> <i
                                                class="fas fa-bookmark"></i><span style="margin: 0 15px">لیست ها</span></a>
                                    </li>
                                    <li class="set-font f-14" dir="rtl"><a class="color-b-700"
                                                                           href="{{route('user.comment')}}"> <i
                                                class="fas fa-comment"></i><span
                                                style="margin: 0 15px">نظرات</span></a></li>
                                    <li class="set-font f-14" dir="rtl"><a class="color-b-700"
                                                                           href="{{route('user.location')}}"> <i
                                                class="fas fa-map-marker-alt"></i><span
                                                style="margin: 0 15px">نشانی ها</span></a></li>
                                    <li class="set-font f-14" dir="rtl"><a class="color-b-700"
                                                                           href="{{route('user.card')}}"> <i
                                                class="fas fa-shopping-basket"></i><span
                                                style="margin: 0 15px">سبد خرید</span></a></li>
                                    <li class="set-font f-14" dir="rtl"><a class="color-b-700"
                                                                           href="{{route('user.message')}}"> <i
                                                class="fas fa-envelope"></i><span style="margin: 0 15px">پیغام ها</span></a>
                                    </li>
                                    <li class="set-font f-14" dir="rtl"><a class="color-b-700"
                                                                           href="{{route('user.view')}}"> <i
                                                class="fas fa-user"></i><span style="margin: 0 15px">اطلعات حساب</span></a>
                                    </li>
                                    <li class="set-font f-14" dir="rtl"><a class="color-b-700"
                                                                           href="{{route('user.exit')}}"> <i
                                                class="fas fa-sign-out-alt"></i><span style="margin: 0 15px">خروج</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('front.include.footer')
        </div>
    </div>
</div>
<script src="{{url('js/app.js')}}"></script>
</body>
</html>
