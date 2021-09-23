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
                            <li @click="delete_item_attr_product_seller({{ $propertie_product->id }})" class="set-font f-12 view-item-attr-seller"> <i class="fas fa-caret-left color-b-500 f-10"></i> {{$propertie_product->title}} : {{$propertie_product->name}} </li>
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
            </div>
        </div>
    </div>
</div>
