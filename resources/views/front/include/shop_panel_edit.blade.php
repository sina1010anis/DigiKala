<div class="box-shop">
    <p align="right" dir="rtl" class="f-19 set-font"><span class="color-b-500"> {{ $data->name }} | {{ $data->all_menus->name }} > {{ $data->down_all_menus->name }} </span><span></span></p>
</div>
@if(session('msg'))
<div class="view-msg-send-back">
    <p class="set-font f-12" style="color: white">{{session('msg')}}</p>
</div>
@endif
<div class="menu-view">
    <div class="view-menu-product" style="width: 100%">
        <div class="sm-filter">
            <div class="view-product-menu-search">
                <form action="{{ route('shop.edit.product.send' , ['name' => $data->name]) }}" method="POST">
                    @csrf
                    <h3 dir="rtl" class="set-fornt color-b-700">ویراش های سطحی</h3>
                    <div class="line"></div>
                    <label for="email" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">نام محصول</label>
                    <input @error('name') style="border:1px solid red"  @enderror value="{{ $data->name }}" type="text" name="name" class="input_edit_product_seller">
                    @error('name')
                        <p style="color:red" class="f-11" dir="rtl" align="center">{{ $message }}</p>
                    @enderror
                    <label for="email" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">قیمت محصول</label>
                    <input @error('price') style="border:1px solid red"  @enderror value="{{ $data->price }}" type="text" name="price" class="input_edit_product_seller">
                    @error('price')
                    <p style="color:red" class="f-11" dir="rtl" align="center">{{ $message }}</p>
                    @enderror
                        <label for="email" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">توضیحات محصول</label>
                        <input @error('description') style="border:1px solid red"  @enderror value="{{ $data->description }}" type="text" name="description" class="input_edit_product_seller">
                        @error('description')
                        <p style="color:red" class="f-11" dir="rtl" align="center">{{ $message }}</p>
                    @enderror
                        <label for="email" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">تخفیف محصول</label>
                        <input @error('off') style="border:1px solid red"  @enderror value="{{ $data->off }}" type="text" name="off" class="input_edit_product_seller">
                        @error('off')
                        <p style="color:red" class="f-11" dir="rtl" align="center">{{ $message }}</p>
                    @enderror
                    <h3 dir="rtl" class="set-fornt color-b-700">ویراش برند</h3>
                    <img src="{{url('data/image/image_brand/').'/'.$data->brands->image}}" alt="{{$data->brands->name}}"
                    title="{{$data->brands->name}}">
                    <select class="item-select-seller" name="brand_id" id="brand_id">
                        @foreach ($brand_all as $brand_all)
                            <option @if ($brand_all->id == $data->brand_id)
                                selected
                            @endif value="{{ $brand_all->id }}">{{ $brand_all->name }}</option>
                        @endforeach
                    </select>
                    <br>
                    <br>
                    <button style="padding:20px" class="btn-logout" type="submit">تایید</button>
                </form>
                <p class="set-font f-12" style="color:red" align="center" dir="rtl">در این بخش فقط مقدار های سطحی از محصولات قابل ویرایش است لطفا کاردی خالی نزارید .</p>
                <p class="set-font f-12" style="color:red" align="center" dir="rtl">برای ویرایش برند هم از همین بخش اقدام کنید .</p>
            </div>
        </div>
    </div>
</div>


<div class="menu-view">
    <div class="view-menu-product" style="width: 100%">
        <div class="sm-filter">
            <div class="view-product-menu-search">
                <form action="{{ route('shop.edit.product.menu.send' , ['name' => $data->name]) }}" method="POST">
                    @csrf
                    <h3 dir="rtl" class="set-fornt color-b-700">ویراش منو</h3>
                    <label for="menu_id" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">منو اصلی</label>
                    <select v-model="seller_menu_1" class="item-select-seller" name="menu_id" id="menu_id">
                        @foreach ($all_menus as $all_menu)
                            <option @if ($all_menu->id == $data->menu_id)
                                selected
                            @endif  value="{{ $all_menu->id }}">{{ $all_menu->name }}</option>
                        @endforeach
                    </select>
                    <label for="sub_menu_id" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">منو سطح دو</label>
                    <select v-model="seller_menu_2" class="item-select-seller" name="down_all_menu" id="sub_menu_id">
                        @foreach ($sub_all_menus as $sub_all_menu)
                            <option v-if="seller_menu_1 == {{ $sub_all_menu->all_menu_id }}" value="{{ $sub_all_menu->id }}">{{ $sub_all_menu->name }}</option>
                        @endforeach
                    </select>

                    <label for="down_all_menu" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">منو سطح سه</label>
                    <select class="item-select-seller" name="sub_menu_id" id="down_all_menu">
                        @foreach ($down_all_menu as $down_all_menu)
                            <option v-if="seller_menu_2 == {{ $down_all_menu->sub_all_menu_id }}" value="{{ $down_all_menu->id }}">{{ $down_all_menu->name }}</option>
                        @endforeach
                    </select>
                    <br>
                    <br>
                    <button style="padding:20px" class="btn-logout" type="submit">تایید</button>
                </form>
                <p class="set-font f-12" style="color:red" align="center" dir="rtl">برای دیدن نمو فعلی در قسمت بالا کنار تیتر بالا نام محصول منو و زیر منو قابل مشاهده است</p>
                <p class="set-font f-12" style="color:red" align="center" dir="rtl">اگر منو ها اول قابل مشاهده نست به این معنی نیست که داخل دسته قرار ندارد .</p>
            </div>
        </div>
    </div>
</div>



<div class="menu-view">
    <div class="view-menu-product" style="width: 100%">
        <div class="sm-filter">
            <div class="view-product-menu-search">
                <h3 dir="rtl" class="set-fornt color-b-700">ویژگی ها</h3>
                <div class="line"></div>
                <ul>
                    @foreach($properties_product as $propertie_product)
                        @if($propertie_product->product_id == $data->id)
                            <li dir="rtl" @click="delete_item_attr_product_seller({{ $propertie_product->id }})" class="set-font f-12 view-item-attr-seller"> <i class="fas fa-caret-left color-b-500 f-10"></i> {{$propertie_product->title}} : {{$propertie_product->name}} </li>
                        @endif
                    @endforeach
                </ul>
                <div class="line"></div>
                <form action="{{ route('shop.new.attr.product' , ['name' => $data->name]) }}" method="POST">
                    <h3 dir="rtl" class="set-fornt color-b-700">ویژگی جدبد</h3>
                    @csrf
                    <label for="title_attr" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">موضوع</label>
                    <input id="title_attr" @error('title_attr') style="border:1px solid red"  @enderror type="text" name="title_attr" class="input_edit_product_seller">
                    @error('title_attr')
                    <p style="color:red" class="f-11" dir="rtl" align="center">{{ $message }}</p>
                @enderror

                <label for="name_attr" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">نام</label>
                <input id="name_attr" @error('name_attr') style="border:1px solid red"  @enderror type="text" name="name_attr" class="input_edit_product_seller">
                @error('name_attr')
                <p style="color:red" class="f-11" dir="rtl" align="center">{{ $message }}</p>
            @enderror
                    <br>
                    <br>
                    <button style="padding:20px" class="btn-logout" type="submit">تایید</button>
                </form>
                <p class="set-font f-12" style="color:red" align="center" dir="rtl">فقط قابل نمایش است و با ویژگی های  فیلتر فرق میکند .</p>
                <p class="set-font f-12" style="color:red" align="center" dir="rtl">برای حذف یکی از ویژگی ها روی یکی از ویژگی ها یک با کلیک کنید .</p>
                <p class="set-font f-12" style="color:red" align="center" dir="rtl">ویژگی ها قابل ویرایش نیستند برای ویرایش یک با حذف و دوباره ایجاد کنید .</p>
            </div>
        </div>
    </div>
</div>


<div class="menu-view">
    <div class="view-menu-product" style="width: 100%">
        <div class="sm-filter">
            <div class="view-product-menu-search">
                <h3 dir="rtl" class="set-fornt color-b-700">ویژگی های فیلتر</h3>
                <div class="line"></div>
                <ul>
                    @foreach($attr_products as $attr_product)
                        @if($attr_product->product_id == $data->id)
                            @if ( $attr_product->attr_filter_id <= 0)
                                <li @click="edit_attr_filter_seller({{ $attr_product->title_filter_id }} , {{$attr_product->id}})" dir="rtl" class="set-font f-12 view-filter-attr-seller"> <i class="fas fa-caret-left color-b-500 f-10"></i> {{$attr_product->title_filters->name}} : {{$attr_product->attr_filter_id}} </li>
                            @else
                                <li @click="edit_attr_filter_seller({{ $attr_product->title_filter_id }} , {{$attr_product->id}})" dir="rtl" class="set-font f-12 view-filter-attr-seller"> <i class="fas fa-caret-left color-b-500 f-10"></i> {{$attr_product->title_filters->name}} : {{$attr_product->attr_filters->name}} </li>
                            @endif
                        @endif
                    @endforeach
                    @php
                        if ($attr_products->where('product_id' , $data->id)->count() <= 0) {
                            echo '
                            <p class="set-font f-12" style="color:red" align="center" dir="rtl">برای این محصول فیلتری موجود نیست لطفا برای ساخت فیلتر ها در همین بخش روی دکمه گزارش کلیک کنید .</p>
<div class="w-50 box-seting-edit-product">
    <button @click="builder_filter('.$data->id.')" class="set-font f-12 btn-sendre-product">گزارش</button>
                            ';
                        }
                    @endphp
                </ul>
                <p class="set-font f-12" style="color:red" align="center" dir="rtl">ویژگی های فیلتر یک مقدار تعین شده است و قابل اصافه شدن نیست و فقط میتوان  را  ویرایش کرد</p>
                <p class="set-font f-12" style="color:red" align="center" dir="rtl">برای ویرایش لطفا روی یک مقدار یک بار کلید کنید</p>
            </div>
        </div>
    </div>


<div class="menu-view">
    <div class="view-menu-product" style="width: 100%">
        <div class="sm-filter">
            <div class="view-product-menu-search">
                <h3 dir="rtl" class="set-fornt color-b-700">تصاویر</h3>
                <div class="line"></div>
                <div class="box-all-img-seller">
                    <span class="box-img-seller-product">
                        <img class="image-item-product-seller image-item-product-origin-seller" src="{{url('data/image/image product/').'/'.$data->image}}" alt="">
                        <span class="text-origin f-11">عکس اصلی</span>
                    </span>
                    @foreach ($image_products as $image_product)
                        <span class="box-img-seller-product" v-if="{{ $image_product->product_id }} == {{ $data->id }}">
                            <img class="image-item-product-seller" src="{{url('data/image/image one product/').'/'.$image_product->address}}" alt="{{ $image_product->name }}">
                            <i @click="delete_image_product_seller('{{ $image_product->id }}')" class="far fa-trash-alt"></i>
                        </span>
                    @endforeach
                </div>
                <form action="{{ route('shop.new.image.product' , ['id' => $data->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h4 dir="rtl" class="set-fornt color-b-700">تصویر جدید</h4>
                    <div class="line"></div>
                    <label for="email" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">نام محصول</label>
                    <input @error('image') style="border:1px solid red"  @enderror type="file" name="image" class="input_edit_product_seller">
                    @error('image')
                        <p style="color:red" class="f-11" dir="rtl" align="center">{{ $message }}</p>
                    @enderror
                    <br>
                    <br>
                    <button style="padding:20px" class="btn-logout" type="submit">تایید</button>
                </form>
                <p class="set-font f-12" style="color:red" align="center" dir="rtl">تصویر اصلی قابل حذف نمی باشد .</p>
            </div>
        </div>
    </div>
</div>

<div class="menu-view">
    <div class="view-menu-product" style="width: 100%">
        <div class="sm-filter">
            <h3 dir="rtl" class="set-fornt color-b-700">تنظیمات</h3>
            <div class="line"></div>
            <div class="view-product-menu-search">
                    <div class="w-50 box-seting-edit-product">
                        <span class="set-font f-12 color-b-600 fl-right">گزارش تغییر بسته بندی</span>
                        <button class="set-font f-12 btn-sendre-product">گزارش</button>
                    </div>
                    <div class="line"></div>                    <div class="w-50 box-seting-edit-product">
                        <span class="set-font f-12 color-b-600 fl-right">گزارش تغییر محتویات</span>
                        <button class="set-font f-12 btn-sendre-product">گزارش</button>
                    </div>
                    <div class="line"></div>
                    <div class="w-50 box-seting-edit-product">
                        <span class="set-font f-12 color-b-600 fl-right">گزارش تغییر استفاده</span>
                        <button class="set-font f-12 btn-sendre-product">گزارش</button>
                    </div>
                    <div class="line"></div>
                    <div class="w-50 box-seting-edit-product">
                        <span class="set-font f-12 color-b-600 fl-right">گزارش موجودی</span>
                        <button class="set-font f-12 btn-sendre-product">گزارش</button>
                    </div>
                    <div class="line"></div>
                    <div class="w-50 box-seting-edit-product">
                        <span class="set-font f-12 color-b-600 fl-right">گزارش حذف محصول</span>
                        <button class="set-font f-12 btn-sendre-product">گزارش</button>
                    </div>
            </div>
        </div>
    </div>
</div>


<div class="page-edit-attr-filter">
        <label for="sub_menu_id" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">مقدار فیلتر</label>
        <select v-model="attr_filter_id" class="item-select-seller" name="down_all_menu" id="sub_menu_id">
            @foreach ($attr_filter as $attr)
                <option v-if="id_edit_attr_filter_seller == '{{ $attr->title_filter_id }}'" value="{{ $attr->id }}">{{ $attr->name }}</option>
            @endforeach
        </select>
        <br>
        <br>
        <button @click="send_edit_attr_filter_seller()" style="padding:20px" class="btn-logout" type="submit">تایید</button>
</div>

<div class="blur-web"></div>
