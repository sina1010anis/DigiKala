@if($all_item_card->count() > 0)
    <div class="group-save-product" style="position: relative">
    <span style="width: 100%!important;" class="view-profile-index-user-buy fl-left view-profile-index-user-buy-test">
        <span>
            <h4 class="set-font color-b-700" align="right">سبد خرید</h4>
            <span class="line fl-right"></span>
            <span class="view-list-buy" style="padding: 10px;box-sizing: border-box;background-color: unset">
                <?php $price = 0; ?>
                @foreach($all_item_card as $save_product)
                    <a class="view-product-save fl-right"
                       href="{{route('product.show' , ['slug'=>$save_product->products->slug])}}">
                            <img src="{{url('data/image/image product/').'/'.$save_product->products->image}}"
                                 alt="{{$save_product->products->name}}" title="{{$save_product->products->name}}">
                            <p align="center" class="set-font f-13 color-b-800">{{$save_product->products->name}}</p>
                            <p align="center"
                               class="set-font f-12 color-b-600">قیمت : {{$save_product->total_price}}</p>
                            <p align="center" class="set-font f-12 color-b-600">تعداد : {{$save_product->number}}</p>
                                                        <?php
                        $price += $save_product->total_price * $save_product->number;
                        ?>
                        </a>
                @endforeach

            </span>
        </span>
    </span>
        @if(auth()->user()->mobile == 'null' || auth()->user()->code_m == 'null')
            <p class="set-font f-12 color-b-600 btn-new-address view-err-card">برای خرید محصول و ارئه بهتر لطفا در قسمت اطلعات حساب شماره موبایل ، کد ملی را وارد</p>
        @else
            @if(auth()->user()->address_id == 0)
                <p class="set-font f-12 color-b-600 btn-new-address view-err-card">ادرسی وارد نشده لطفا در قسمت نشانی ها ادرس جدیدی اضافه کنید</p>
            @else
                <button class="set-font f-12 color-b-600 btn-new-address" @click="showPageNewAddress">پرداخت با مبلغ
                    : {{$price}}</button>
            @endif
        @endif
    </div>
@else
    <div class="group-null">
        <img src="{{url('data/image/icon/shop.png')}}" alt="">
        <p class="f-20 color-b-400 set-font">کارت شما خالی است</p>
    </div>
@endif
