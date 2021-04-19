<div class="view-title-menu set-font f-17" align="center">مدریت کامت محصولات</div>
<div class="view-item-table">
    <style>
        path {
            display: none !important;
        }

        .relative {
            padding: 5px 20px !important;
            background-color: yellow !important;
        }
    </style>
    <table>
        <tr>
            <th>ایدی</th>
            <th>نام کاربر</th>
            <th>ادرس</th>
            <th>محصولات</th>
            <th>وضعیت پرداخت</th>
            <th>وضعیت ارسال</th>
            <th>جمع کل فاکتور</th>
            <th>تاریخ ارسال</th>
        </tr>
        @foreach($factor_all as $item)
            <tr class="f-13 tr-view-item-table-admin">
                <td>{{$item->id}}</td>
                <td>{{$item->users->name}}</td>
                <td class="f-11">{{$item->addresses->citys->name}} - {{$item->addresses->streets->name}} - {{$item->addresses->address}}</td>
                <td>
                    <p class="f-11 p-name-product" v-for="i in {{$item->product}}" @click="set_id_view_min_product(i.product_id)">نام محصول @{{i.product_id}} - تعداد سفارش @{{i.number}}</p>
{{--                    @foreach($item->product as $i)--}}
{{--                        <p>نام محصول {{$i->product_id}} - تعداد سفارش {{$i->number}}</p>--}}
{{--                    @endforeach--}}
                </td>
            <?php
                if ($item->status_buy == 200){
                echo '                <td><p class="btn-war">پرداخت شده</p></td>
                ';
                }else {
                    echo '                <td><p class="btn-war">پرداخت نشده</p></td>';
                }
                ?></td>
            <?php
            if ($item->status_send == 100){
                echo '                <td><p class="btn-war">درحال تایید سفارش</p></td>
                ';
            }if($item->status_send == 200) {
                echo '                <td><p class="btn-war">درحال اماده سازی سفارش</p></td>';
            }if($item->status_send == 300) {
                echo '                <td><p class="btn-war">درحال بسته بندی</p></td>';
            }
            if($item->status_send == 400) {
                echo '                <td><p class="btn-war">در صف ارسال</p></td>';
            }
            if($item->status_send == 500) {
                echo '                <td><p class="btn-war">تحویل پست</p></td>';
            }
            if($item->status_send == 600) {
                echo '                <td><p class="btn-war">سفارش تحویل گرقته شده است</p></td>';
            }
            ?></td>
            <td>{{$item->total_price}}</td>

            <td>{{jdate($item->created_at)->format('%A, %d %B %y')}}</td>
            </tr>
        @endforeach
    </tr>
    </table>
</div>
{{$comment_all_panel_admin->links()}}
@foreach($products_all as $i)
<div style="display: inline-block" v-if="id_view_min_product == {{$i->id}}" class="group-form-new-comment group-input-for-login-register page-create-admin">
    <h4 class="set-font color-b-800" align="center">نمایش محصول</h4>
    <div class="line"></div>
            <img class="view-min-product-factor" src="{{url('data/image/image product').'/'.$i->image}}" alt="">
            <p class="set-font color-b-800 f-14">{{$i->name}}</p>
</div>
@endforeach
<div class="blur-web" @click="hideAllPage"></div>
