<div class="view-profile-index-user">
    <span class="view-profile-index-user-profile fl-right">
        <span>
            <h4 class="set-font color-b-700" align="right">اطلعات کاربری</h4>
            <span class="line fl-right"></span>
            <span class="view-item-profile-min fl-right">
                <span dir="rtl" class="fl-right set-font f-14 color-b-900">نام کاربری :</span>
                <span dir="rtl" class="fl-left set-font f-13 color-b-700">{{auth()->user()->name}}</span>
            </span>
            <span class="view-item-profile-min fl-right">
                <span dir="rtl" class="fl-right set-font f-14 color-b-900">شماره تلفن :</span>
                @if(auth()->user()->mobile == 'null')
                    <span dir="rtl" class="fl-left set-font f-13 color-b-700">-</span>
                @else
                    <span dir="rtl" class="fl-left set-font f-13 color-b-700">{{auth()->user()->mobile}}</span>
                @endif
            </span>
            <span class="view-item-profile-min fl-right">
                <span dir="rtl" class="fl-right set-font f-14 color-b-900">پست الکترنیکی :</span>
                @if(auth()->user()->email == 'null')
                    <span dir="rtl" class="fl-left set-font f-13 color-b-700">-</span>
                @else
                    <span dir="rtl" class="fl-left set-font f-13 color-b-700">{{auth()->user()->email}}</span>
                @endif
            </span>
                        <span class="view-item-profile-min fl-right">
                <span dir="rtl" class="fl-right set-font f-14 color-b-900">گوگل ایدی :</span>
                @if(auth()->user()->google_id == null)
                                <span dir="rtl" class="fl-left set-font f-13 color-b-700">-</span>
                            @else
                                <span dir="rtl"
                                      class="fl-left set-font f-13 color-b-700">{{auth()->user()->google_id}}</span>
                            @endif
            </span>
                                    <span class="view-item-profile-min fl-right">
                <span dir="rtl" class="fl-right set-font f-14 color-b-900">موقعیت :</span>
                            @if(auth()->user()->action == 1)
                                            <span dir="rtl" class="fl-left set-font f-13 color-b-700">مدیراصلی</span>
                                        @else
                                            <span dir="rtl" class="fl-left set-font f-13 color-b-700">مشتری</span>
                                        @endif
            </span>


        </span>
    </span>
    <span class="view-profile-index-user-buy fl-left">
        <span>
            <h4 class="set-font color-b-700" align="right">اخرین خرید</h4>
            <span class="line fl-right"></span>
            <span class="view-list-buy">
                <ul>
                    <li>
                        <span class="p set-font f-12">test</span>
                        <span @click="viewEtSm" class="btn-view-et-buy set-font f-12 color-b-600">مشاهده</span>
                    </li>
                </ul>
            </span>
        </span>
    </span>
</div>
<div class="page-view-sm-buy">

    <h5 class="set-font color-b-800" align="center">جزئیات سفارش</h5>
    <div class="line"></div>
    <div class="gp-all">
        <p class="set-font color-b-700 f-12" align="right">لیست سفارشات</p>
        <div class="list-order">
            <ul>
                <li>
                    <span dir="rtl" class="set-font f-11 color-b-800 fl-right">نام محصول : </span>
                    <span dir="rtl" class="set-font f-11 color-b-600 fl-left">تعداد محصول </span>
                </li>
            </ul>
        </div>
        <div class="group-view-et-order">
            <span dir="rtl" class="set-font f-11 color-b-800 fl-right">کد سفارش </span>
            <span dir="rtl" class="set-font f-11 color-b-600 fl-left">11111111 </span>
        </div>
        <div class="group-view-et-order">
            <span dir="rtl" class="set-font f-11 color-b-800 fl-right">تاریخ ثبت </span>
            <span dir="rtl" class="set-font f-11 color-b-600 fl-left">11111111 </span>
        </div>
        <div class="group-view-et-order">
            <span dir="rtl" class="set-font f-11 color-b-800 fl-right">ثبت کننده </span>
            <span dir="rtl" class="set-font f-11 color-b-600 fl-left">11111111 </span>
        </div>
        <div class="group-view-et-order">
            <span dir="rtl" class="set-font f-11 color-b-800 fl-right">وضعیت </span>
            <span dir="rtl" class="set-font f-11 color-b-600 fl-left">11111111 </span>
        </div>
        <div class="line"></div>
        <div class="group-view-et-order">
            <span dir="rtl" class="set-font f-11 color-b-800 fl-right">قیمت کل </span>
            <span dir="rtl" class="set-font f-11 color-b-600 fl-left">11111111 </span>
        </div>
    </div>
    <span @click="exitPage" class="btn-cls set-font fl-right f-13">
        بستن
    </span>
</div>
