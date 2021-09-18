<div class="group-view-product-all">
    @if(session('msg'))
        <div class="view-msg-send-back">
            <p class="set-font f-12" style="color: white">{{session('msg')}}</p>
        </div>
    @endif
    <div class="group-index-view-product">
        <span class="group-image-product-one-page">
            <div class="group-view-image-index">
                <img v-if="srcBackOneProduct == ''" src="{{url('data/image/image product/').'/'.$data->image}}" alt="">
                <img v-else :src="srcBackOneProduct" alt="">
            </div>
            <div class="group-item-image-select">
                @foreach($image_products as $image_product)
                    @if($image_product->product_id == $data->id)
                        <span
                            @click="setScrForBackOnePageProduct('{{url('data/image/image one product/').'/'.$image_product->address}}')"
                            class="item-image-select">
                            <img src="{{url('data/image/image one product').'/'.$image_product->address}}" alt="">
                        </span>
                    @endif
                @endforeach
            </div>
        </span>
        <span class="group-dis-product-one-page">
            <span class="view-off-product set-font f-13">{{$data->off}}%</span>
            <p class="name-product" align="right">{{$data->name}}</p>
            <div class="line"></div>
            <div class="count-comment">
                <span class="set-font fl-right" style="font-size: 12px"> 4.5 <i style="color: #ff2f2f"
                                                                                class="far fa-heart"></i> </span>
                <span class="set-font fl-right" style="font-size: 12px;margin:0 10px "> 72 <i style="color: #2a73b0"
                                                                                              class="far fa-comment"></i> </span>
                <span class="set-font fl-right" style="font-size: 12px;margin:0 10px "> 98/100 <i style="color: #ffe700"
                                                                                                  class="fab fa-mdb"></i> </span>
            </div>
            <a class="view-brand">
                @foreach($brand_all as $brand)
                    @if($data->brand_id == $brand->id)
                        <img src="{{url('data/image/image_brand/').'/'.$brand->image}}" alt="{{$brand->name}}"
                             title="{{$brand->name}}">
                    @endif
                @endforeach
            </a>
            <p dir="rtl" class="name-product name-product-attr f-16" align="right">ویژگی ها :</p>
            <ul>
                @foreach($properties_product as $propertie_product)
                    @if($propertie_product->product_id == $data->id)
                        <li class="set-font"> <i class="fas fa-caret-left"></i> {{$propertie_product->title}} : {{$propertie_product->name}} </li>
                    @endif
                @endforeach
            </ul>
        </span>
        <span class="group-item-buy-product">
            <div class="group-buy-product">
                <div class="group-fl">
                    <p dir="rtl" class="set-font f-12 color-b-800 p-f-p" align="right">فروشنده</p>
                    <div class="set-font view-dl f-12 ">
                        <i style="color: #ff2f2f" class="far fa-heart f-22"></i>

                        رضایت در دیجی کالا 4.5
                        <i class="fas fa-chevron-left arrow-dl"></i>
                    </div>
                    @if($data->seller > 0)
                        <div class="set-font view-dl f-12 ">
                            <i style="color: #2a73ff" class="fas fa-store f-22"></i>
                            <a class="color-b-700 f-10" href="{{route('shop.view' , ['name' => $data->sellers->id])}}">
                            فروشنده این کالا دیجی کالا نیست (کلیک برای نمایش دیگر محصولات)
                                </a>
                            <i class="fas fa-chevron-left arrow-dl"></i>
                        </div>
                    @endif
                    <div class="line"></div>
                    <div class="set-font view-dl f-12 ">
                        <i style="color: #2a73ff" class="fas fa-shipping-fast f-22"></i>
                        ارسال سریع برای این محصول
                        <i class="fas fa-chevron-left arrow-dl"></i>
                    </div>
                    <div class="line"></div>
                    <div class="set-font view-dl f-12 ">
                        <i style="color: #8aff4d" class="fas fa-check f-22"></i>
                        درای گارانتی اصلی خود شرکت
                        <i class="fas fa-chevron-left arrow-dl"></i>
                    </div>
                    <div class="line"></div>
                    <div class="set-font view-dl f-12 ">
                        <i style="color: #d76dff" class="fas fa-hand-holding-usd f-22"></i>
                        @if($data->off == 0)
                            <a style="position: relative;top: 6px" class="f-14 set-font color-b-800">{{$data->price}}تومان </a>
                        @else
                            <?php
                            $price_back = $data->price * ($data->off / 100);
                            $price_next = $data->price - $price_back;
                            echo '<a style="text-decoration: line-through!important;color: #414141" class="view-products-slider-price">' . $data->price . 'تومان' . '</a>';
                            echo '<a style="margin: 0 5px!important;color: #414141" class="view-products-slider-price">' . $price_next . 'تومان' . '</a>';
                            ?>
                        @endif
                        <i class="fas fa-chevron-left arrow-dl"></i>
                    </div>
                </div>
                                        @if($data->off == 0)
                    <span style="position: relative;top: 6px" class="view-price-for-mobile f-14 set-font color-b-800">{{$data->price}}تومان </span>
                @else
                    <?php
                    $price_back = $data->price * ($data->off / 100);
                    $price_next = $data->price - $price_back;
                    echo '<span style="margin: 0 5px!important;color: #414141" class="view-price-for-mobile view-products-slider-price">' . $price_next . 'تومان' . '</span>';
                    ?>
                @endif
                    <a class="btn-send-card set-font" href="{{route('plusCard' , ['slug' => $data->slug] )}}">افزودن به سبد خرید</a>
            </div>

        </span>
    </div>
    <div class="view-product-one">
        <div class="view-slider-products" style="width: 100%;">
            <h3>محصولات مشابه</h3>
            <div class="line"></div>
            <div class="group-view-products-slider responsive-group5">
                @foreach($products_all as $mobile_product)
                    @if($mobile_product->sub_menu_id == $data->sub_menu_id)
                        <span title="محصول test">
                        <img src="{{url('data/image/image product/').'/'.$mobile_product->image}}"
                             alt="{{$mobile_product->name}}" title="{{$mobile_product->name}}">
                        <a href="{{route('product.show' , ['slug'=>$mobile_product->slug])}}"><p
                                class="view-products-slider-name" align="center">{{$mobile_product->name}}</p></a>
                        @if($mobile_product->off > 0)
                                <div class="add-off-product">
                                <a class="number-off-price">{{$mobile_product->off}}%</a>
                                <p class="view-products-slider-price-back-off">{{$mobile_product->price}} تومان</p>
                            </div>
                            @endif
                            <?php
                            if ($mobile_product->off > 0) {
                                $price_back = $mobile_product->price * ($mobile_product->off / 100);
                                $price_next = $mobile_product->price - $price_back;
                                echo '<p class="view-products-slider-price">' . $price_next . 'تومان' . '</p>';
                            } else {
                                echo '<p class="view-products-slider-price">' . $mobile_product->price . 'تومان' . '</p>';
                            }

                            ?>
                    </span>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    @if($data->menu_id == 2)
        <div
            class="view-hamta">
            <p dir="rtl" align="center" class="f-13 set-font"><i class="fas fa-exclamation"> </i> هشدار سامانه همتا:
                حتما در زمان تحویل دستگاه، به کمک کد فعال‌سازی چاپ شده روی جعبه یا کارت گارانتی، دستگاه را از طریق
                #7777*، برای سیم‌کارت خود فعال‌سازی کنید. آموزش تصویری در آدرس اینترنتی hmti.ir/05 </p>
        </div>
    @endif
    <div class="group-view-dis-one-product">
        <ul>
            <li class="set-font f-14 color-b-800 border-item"><a class="color-b-700" href="">نقد و برسی</a></li>
            <li class="set-font f-14 color-b-800 border-item"><a class="color-b-700" href="">مشخصات</a></li>
            <li class="set-font f-14 color-b-800 border-item"><a class="color-b-700" href="">دیدگاه کاربران</a></li>
        </ul>
        <br>
        <br>
        <br>
        <div style="margin-top: -14px!important;" class="line"></div>
        <br>
        <span dir="rtl" class="fl-right title-dis set-font color-b-800">نقد و برسی اجمالی <span class="color-b-400">samsung A50</span></span>
        <br>
        <br>
        <br>
        <p dir="rtl" align="right" class="view-dis-one-product set-font color-b-800">
            {{$data->description}}
        </p>
        <div class="line"></div>
        <br>
        <span dir="rtl" class="fl-right title-dis set-font color-b-800">مشخصات کلی کالا <span class="color-b-400">samsung A50</span></span>
        <br>
        <br>
        <br>
        <table dir="rtl" align="center" class="table set-font">
            <tbody>
            @foreach($attr_products as $attr_product)
                @if($attr_product->product_id == $data->id)
                    <tr>
                        <th align="right" class="color-b-700 set-font f-13"
                            scope="row">{{$attr_product->title_filters->name}}</th>
                        <td align="right" class="color-b-800 set-font f-12">{{$attr_product->attr_filters->name}}</td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="min-view-comment">
        <br>
        <span dir="rtl" class="fl-right title-dis set-font color-b-800">نظرات کاربران برای <span class="color-b-400">samsung A50</span></span>
        <br>
        <br>
        <br>
        <ul>
            @foreach($comments as $comment)
                @if($comment->product_id == $data->id)
                    <li>
                        <p class="set-font title-comment" align="right">{{$comment->title}}</p>
                        <p class="f-11 color-b-500" dir="rtl" align="right">
                            <span class="set-font">{{jdate($comment->created_at)->format('%A, %d %B %y')}}</span> .
                            <span class="set-font">{{$comment->users->name}}</span>
                        </p>
                        <div class="line"></div>
                        <p class="text-comment set-font">{{$comment->text}}</p>
                        <div class="line"></div>
                        <div>
                            <p v-for="ii in {{$comment->vote_good}}" dir="rtl" align="right"
                               class="set-font color-b-700 view-good-product-not-good">
                                <i class="fas fa-plus-square good-product"></i> @{{ii}} </p>
                            <p v-for="i in {{$comment->vote_bad}}" dir="rtl" align="right"
                               class="set-font f-12 color-b-700 view-good-product-not-good">
                                <i class="fas fa-minus-square not-product">@{{ i }}</i></p>

                        </div>
                        <div class="line"></div>
                        <div>
                            <button @click="set_like('{{$comment->id}}')" class="btn-et">
                                <i style="color: #2a73b0" class="far fa-thumbs-up color-b-700"></i>
                                <span
                                    class="f-11 like-number">{{$comment->like}}
                                </span>
                            </button>
                            <button @click="set_dis_like('{{$comment->id}}')" class="btn-et"><i style="color: #ff4646"
                                                                                                class="far fa-thumbs-down color-b-700"></i><span
                                    class="f-11"> {{$comment->dislike}} </span>
                            </button>
                            @auth()
                                <button @click="viewPageReplyComment('{{$comment->id}}')" class="btn-et">
                                    <i style="color: green" class="fas fa-reply-all color-b-700"></i><span
                                        class="f-11">
                                </span>
                                </button>
                            @endauth

                        </div>
                        @foreach($reply_comments as $reply_comment)
                            @if($reply_comment->comment_id == $comment->id)
                                @if($reply_comment->count() > 0)
                                    <ul>
                                        <li class="reply-comment">
                                            <p class="f-11 color-b-500 set-font" dir="rtl"
                                               align="right">{{jdate($reply_comment->created_at)->format('%A, %d %B %y')}}
                                                <span></span>
                                                .

                                                <span>{{$reply_comment->users->name}}</span></p>
                                            <div class="line"></div>
                                            <p class="text-comment set-font">{{$reply_comment->text}}</p>
                                        </li>
                                    </ul>
                                @endif
                            @endif
                        @endforeach
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
<div class="view-err-sm"></div>
<div class="page-reply-comment-product set-font">
    <h4 class="color-b-700" align="center">پاسخ به کامنت</h4>
    <div class="line"></div>

    <form :action="address_comment+id_comment" method="post">
        @csrf
        <textarea class="set-font" type="text" name="text"></textarea>
        @error('text')
        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
        @enderror
        <button>ارسال پاسخ</button>
    </form>
</div>
@auth()
    <div v-if="product_vs_1 != 0">
        <div class="view-product-vs-1">
            <img src="{{url('data/image/image product').'/'.$data->image}}" alt="">
        </div>
        <div class="view-product-vs-2-group"></div>
        <div @click="stertVs" class="view-btn-f-vs">
                <i class="fas fa-sync-alt"></i>
        </div>
        <div @click="showPageProductVs" class="view-icon-plus">
            <i class="fas fa-plus"></i>
        </div>
        <div class="page-select-item-vs">
            <h4 class="set-font color-b-600" align="center">انتخاب محصول برای مقایسه</h4>
            <div class="line">
                <input v-model="searchVsProduct" @keyup="MTsearchVsProduct" type="text" class="search-product-vs"
                       placeholder="جستوجو..." dir="rtl"
                       align="right">
                <div class="group-view-item-product-vs">
                    @foreach($products_all as $i)
                        @if($i->menu_id == $data->menu_id)
                            <div class="view-product-and-vs" @click="saveProduct_vs_2('{{$i->id}}')">
                                <img src="{{url('data/image/image product').'/'.$i->image}}" alt="{{$i->name}}"
                                     title="{{$i->name}}">
                                <span class="view-name-product-vs set-font color-b-700 f-13">{{$i->name}}</span>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div title="نظر جدید" @click="showPageNewComment" class="view-new-comment">
        <i class="far fa-comment-dots"></i>
    </div>
    <div title="اضافه لیست مورد علاقه" @click="saveToSaveProduct('{{$data->id}}')"
         class="view-new-comment view-new-bookmark">
        <i class="far fa-bookmark"></i>
    </div>
    <div title="مقایسه" @click="saveProduct_vs_1({{$data->id}})" class="view-new-comment view-vs-product">
        <i class="fas fa-exchange-alt"></i>
    </div>
    <div class="group-form-new-comment group-input-for-login-register">
        <h4 class="set-font color-b-800" align="center">نظر جدید</h4>
        <div class="line"></div>
        <form @submit.prevent="send_comment('{{$data->id}}')" action="" method="post">
            @csrf
            <input v-model="text_title" type="text" name="title" placeholder="موضوع کامنت ...">
            <textarea v-model="text_comment" class="set-font" type="text" name="title"
                      placeholder="متن پیام ..."></textarea>
            <span class="group-good-product fl-right">
                <p class="set-font color-b-700 f-10" align="center">نقاط قوت</p>
                <input v-model="text_vote_good" type="text" class="fl-right set-font input-set-voet">
                <select class="fl-left" name="" id="">
                    <option v-for="i in good_product" value="">@{{i}}</option>
                </select>
                <button @click="set_vote_good" type="button" class="set-vote">ثبت</button>
            </span>
            <span class="group-not-good-product fl-left">
                <p class="set-font color-b-700 f-10" align="center">نقاط ضعف</p>
                <input v-model="text_vote_not_good" type="text" class="fl-right set-font input-set-voet">
                <select class="fl-left" name="" id="">
                    <option v-for="i in not_good_product" value="">@{{ i }}</option>
                </select>
                <button @click="set_vote_not_good" type="button" class="set-vote">ثبت</button>
            </span>
            <button type="submit" style="outline: none">ارسال نظر</button>
        </form>
    </div>
@endauth
