<div class="box-shop">
    <p align="right" dir="rtl" class="f-19 set-font"><span class="color-b-500"> {{ $data->name }} | {{ $data->all_menus->name }} > {{ $data->down_all_menus->name }} </span><span></span></p>
</div>
<div class="menu-view">
    <div class="view-menu-product" style="width: 100%">
        <div class="sm-filter">
            <div class="view-product-menu-search">
                <form action="{{ route('shop.edit.product.send') }}" method="POST">
                    @csrf
                    <h3 dir="rtl" class="set-fornt color-b-700">ویراش های سطحی</h3>
                    <div class="line"></div>
                    <label for="email" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">نام محصول</label>
                    <input value="{{ $data->name }}" type="text" name="name" class="input_edit_product_seller">
                    <label for="email" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">قیمت محصول</label>
                    <input value="{{ $data->price }}" type="text" name="price" class="input_edit_product_seller">
                    <label for="email" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">توضیحات محصول</label>
                    <input value="{{ $data->description }}" type="text" name="description" class="input_edit_product_seller">
                    <label for="email" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">تخفیف محصول</label>
                    <input value="{{ $data->off }}" type="text" name="off" class="input_edit_product_seller">
                    <h3 dir="rtl" class="set-fornt color-b-700">ویراش منو</h3>
                    <label for="menu_id" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">منو اصلی</label>
                    <select v-model="seller_menu_1" class="item-select-seller" name="menu_id" id="menu_id">
                        @foreach ($all_menus as $all_menu)
                            <option @if ($all_menu->id == $data->menu_id)
                                selected
                            @endif  value="{{ $all_menu->id }}">{{ $all_menu->name }}</option>
                        @endforeach
                    </select>
                    <label for="menu_id" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">منو سطح دو</label>
                    <select v-model="seller_menu_2" class="item-select-seller" name="menu_id" id="menu_id">
                        @foreach ($sub_all_menus as $sub_all_menu)
                            <option v-if="seller_menu_1 == {{ $sub_all_menu->all_menu_id }}" value="{{ $sub_all_menu->id }}">{{ $sub_all_menu->name }}</option>
                        @endforeach
                    </select>
                    <label for="menu_id" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">منو سطح سه</label>
                    <select class="item-select-seller" name="menu_id" id="menu_id">
                        @foreach ($down_all_menu as $down_all_menu)
                            <option v-if="seller_menu_2 == {{ $down_all_menu->sub_all_menu_id }}" value="{{ $down_all_menu->id }}">{{ $down_all_menu->name }}</option>
                        @endforeach
                    </select>
                    <h3 dir="rtl" class="set-fornt color-b-700">ویراش برند</h3>
                    <img src="{{url('data/image/image_brand/').'/'.$data->brands->image}}" alt="{{$data->brands->name}}"
                    title="{{$data->brands->name}}">
                    <select class="item-select-seller" name="menu_id" id="menu_id">
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
