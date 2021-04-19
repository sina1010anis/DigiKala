<div class="view-profile-index-user">
    <span style="width: 100%" class="view-profile-index-user-buy fl-left">
        <span>
            <h4 class="set-font color-b-700" align="right">اخرین خرید(با موفقیت پرداخت شده)</h4>
            <span class="line fl-right"></span>
            <span class="view-list-buy">
                <ul>
                    @foreach($factor_user as $item)
                        @if($item->status_buy == 200)
                            <li>
                                <span
                                    class="p set-font f-12">{{jdate($item->created_at)->format('%A, %d %B %y')}}</span>
                                <span @click="viewEtSm" class="btn-view-et-buy set-font f-12 color-b-600">مشاهده</span>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </span>
        </span>
    </span>
</div>
@foreach($factor_user as $item)
    <div class="page-view-sm-buy">

        <h5 class="set-font color-b-800" align="center">جزئیات سفارش</h5>
        <div class="line"></div>
        <div class="gp-all">
            <p class="set-font color-b-700 f-12" align="right">لیست سفارشات</p>
            <div class="list-order">
                <ul>
                    <li v-for="i in {{$item->product}}">
                        <a style="cursor: pointer" @click="MT_id_view_min_product(i.product_id)">
                            <span class="set-font f-11 color-b-800 fl-right"> @{{i.product_id}} : نام محصول  </span>
                            <span class="set-font f-11 color-b-600 fl-left"> @{{i.number}} : تعداد محصول   </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="group-view-et-order">
                <span dir="rtl" class="set-font f-11 color-b-800 fl-right">کد سفارش </span>
                <span dir="rtl" class="set-font f-11 color-b-600 fl-left">{{$item->id}} </span>
            </div>
            <div class="group-view-et-order">
                <span dir="rtl" class="set-font f-11 color-b-800 fl-right">تاریخ ثبت </span>
                <span dir="rtl" class="set-font f-11 color-b-600 fl-left">{{jdate($item->created_at)->format('%A, %d %B %y')}} </span>
            </div>
            <div class="group-view-et-order">
                <span dir="rtl" class="set-font f-11 color-b-800 fl-right">ثبت کننده </span>
                <span dir="rtl" class="set-font f-11 color-b-600 fl-left">{{$item->users->name}} </span>
            </div>
            <div class="group-view-et-order">
                <span dir="rtl" class="set-font f-11 color-b-800 fl-right">وضعیت </span>
                <span dir="rtl" class="set-font f-11 color-b-600 fl-left">
                                <?php
                    if ($item->status_send == 100){
                        echo '                <p class="btn-war">درحال تایید سفارش</p>
                ';
                    }if($item->status_send == 200) {
                        echo '                <p class="btn-war">درحال اماده سازی سفارش</p>';
                    }if($item->status_send == 300) {
                        echo '                <p class="btn-war">درحال بسته بندی</p>';
                    }
                    if($item->status_send == 400) {
                        echo '                <p class="btn-war">در صف ارسال</p>';
                    }
                    if($item->status_send == 500) {
                        echo '                <p class="btn-war">تحویل پست</p>';
                    }
                    if($item->status_send == 600) {
                        echo '                <p class="btn-war">سفارش تحویل گرقته شده است</p>';
                    }
                    ?>
                </span>
            </div>
            <div style="margin: 35px 0" class="line"></div>
            <div class="group-view-et-order">
                <span dir="rtl" class="set-font f-11 color-b-800 fl-right">قیمت کل </span>
                <span dir="rtl" class="set-font f-11 color-b-600 fl-left">{{$item->total_price}} </span>
            </div>
        </div>
        <span @click="exitPage" class="btn-cls set-font fl-right f-13">
        بستن
    </span>
    </div>
@endforeach
@foreach($products_all as $i)
    <div style="display: inline-block" v-if="id_view_min_product == {{$i->id}}"
         class="group-form-new-comment group-input-for-login-register page-create-admin">
        <i @click="hidePageMinProduct" class="item-exit-view-min">X</i>
        <h4 class="set-font color-b-800" align="center">نمایش محصول</h4>
        <div class="line"></div>
        <div class="center-obj">
            <img style="width: 100px!important" class="view-min-product-factor"
                 src="{{url('data/image/image product').'/'.$i->image}}" alt="">
        </div>
        <p align="center" class="set-font color-b-800 f-20">{{$i->name}}</p>
        <span @click="exitPage" class=" set-font fl-right f-13">
            <a href="{{route('product.show' , $i->slug)}}">
        مشاهده بیشتر
                </a>
        </span>
    </div>
@endforeach
