<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="shit">
    <div id="row">
        <div id="app">
            @if(session('msg'))
                <div class="view-msg-send-back">
                    <p class="set-font f-12" style="color: white">{{session('msg')}}</p>
                </div>
            @endif
            <div class="page-all-admin">
                <span class="part-menu-panel-admin fl-left">
                    <img src="{{url('data/image/icon/admin.png')}}" alt="">
                    <h4 align="center" class="set-font color-b-600">پنل مدریت</h4>
                    <span class="line fl-left"></span>
                    <ul>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.address')}}">مدریت ادرس ها</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.menuTop')}}">مدریت دسته های اصلی</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.menuSub')}}">مدریت دسته های بالا</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.menuDown')}}">مدریت زیر دسته ها</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.menuHeader')}}">مدریت دسته های هدر</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.attrFilter')}}">مدریت دسته فیلتر ها</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.titleFilter')}}">مدریت دسته اصلی فیلتر ها</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.bannerCenter')}}">مدریت بنر (وسط)</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.bannerUp')}}">مدریت بنر (بالا)</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.slider')}}">مدریت اسلایدر</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.card')}}">مدریت سبد خرید</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.brand')}}">مدریت برند ها</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.city')}}">مدریت شهر ها</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.street')}}">مدریت خیابان ها</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.commentProduct')}}">مدریت کامت محصولات</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.factor')}}">مدریت فاکتور ها</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.imageProduct')}}">مدریت تصاویر محصولات</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.commentAdmin')}}">مدریت کامنت ادمین</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.commentReply')}}">مدریت باسخ به کامت ها</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.product')}}">مدریت محصولات</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.property')}}">مدریت ویژگیهای محصولات</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.saveProduct')}}">مدریت محصولات سیو شده</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.user')}}">مدریت کاربران سایت</a></li>
                        <li class="set-font f-13 color-b-700"><a href="{{route('admin.exit')}}">خروج</a></li>
                    </ul>
                </span>
                <span class="part-view-panel-admin fl-right">
                    @yield('index_page')
                </span>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{url('js/app.js')}}"></script>
</html>
