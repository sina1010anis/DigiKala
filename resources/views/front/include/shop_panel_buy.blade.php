<div class="box-shop">
    <p align="right" dir="rtl" class="f-19 set-font"><span
            class="color-b-500">فروشگاه فروشنده </span><span>{{$user->name}}</span></p>
</div>
@include('front.include.nav_bar_panel')
<div class="menu-view">
    <div class="view-menu-product" style="width: 100%">
        <div class="sm-filter">
            <div class="view-product-menu-search">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th></th>
                        <th>تاریخ</th>
                        <th>ردیف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($factor_all as $i)
                        <tr v-for="item in {{$i->product}}">
                            <td><span @click="view_es_shop_panel({{$i->id}})" class="btn-view-et-buy set-font f-12 color-b-600">مشاهده</span></td>
                            <td><span dir="rtl" class="set-font f-11 color-b-600 fl-left">{{jdate($i->created_at)->format('%A, %d %B %y')}} </span></td>
                            <td>{{$loop->index+1}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="page-view-sm-buy" style="display: none;"><h5 class="set-font color-b-800" align="center">جزئیات سفارش</h5>
    <div class="line"></div>
    <div class="gp-all"><p class="set-font color-b-700 f-12" align="right">لیست سفارشات</p>
        <div class="list-order">
            <ul>
                <li><a style="cursor: pointer;"><span
                            class="set-font f-11 color-b-800 fl-right">34 : نام محصول </span><span
                            class="set-font f-11 color-b-600 fl-left">2 : تعداد محصول </span></a></li>
            </ul>
        </div>
        <div class="group-view-et-order"><span dir="rtl"
                                               class="set-font f-11 color-b-800 fl-right">کد سفارش </span><span
                dir="rtl" class="set-font f-11 color-b-600 fl-left">27 </span></div>
        <div class="group-view-et-order"><span dir="rtl"
                                               class="set-font f-11 color-b-800 fl-right">تاریخ ثبت </span><span
                dir="rtl" class="set-font f-11 color-b-600 fl-left">یکشنبه, 28 شهریور 0 </span></div>
        <div class="group-view-et-order"><span dir="rtl"
                                               class="set-font f-11 color-b-800 fl-right">ثبت کننده </span><span
                dir="rtl" class="set-font f-11 color-b-600 fl-left">sina </span></div>
        <div class="group-view-et-order"><span dir="rtl" class="set-font f-11 color-b-800 fl-right">وضعیت </span><span
                dir="rtl" class="set-font f-11 color-b-600 fl-left"><p class="btn-war">درحال تایید سفارش</p></span>
        </div>
        <div class="line" style="margin: 35px 0px;"></div>
        <div class="group-view-et-order"><span dir="rtl" class="set-font f-11 color-b-800 fl-right">قیمت کل </span><span
                dir="rtl" class="set-font f-11 color-b-600 fl-left">700000 </span></div>
    </div>
    <span class="btn-cls set-font fl-right f-13"> بستن </span></div>
<div class="blur-web" style="display: none;"></div>
