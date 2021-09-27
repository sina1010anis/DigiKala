<div class="menu-view">
    <div class="view-menu-product" style="width: 100%">
        <div class="sm-filter">
            <h3 dir="rtl" class="set-fornt color-b-700">محصول جدید</h3>
            <div class="line"></div>
            <form action="{{ route('shop.new.product.send') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="name" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">نام محصول</label>
                <input @error('name') style="border:1px solid red"  @enderror type="text" name="name" class="input_edit_product_seller">
                @error('name')
                    <p style="color:red" class="f-11" dir="rtl" align="center">{{ $message }}</p>
                @enderror
                <label for="description" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">توضیحات</label>
                <input @error('description') style="border:1px solid red"  @enderror type="text" name="description" class="input_edit_product_seller">
                @error('description')
                    <p style="color:red" class="f-11" dir="rtl" align="center">{{ $message }}</p>
                @enderror
                <label for="off" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">مقدار تخفیف</label>
                <input @error('off') style="border:1px solid red"  @enderror type="number" name="off" class="input_edit_product_seller">
                @error('off')
                    <p style="color:red" class="f-11" dir="rtl" align="center">{{ $message }}</p>
                @enderror
                <label for="price" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">قیمت</label>
                <input @error('price') style="border:1px solid red"  @enderror type="number" name="price" class="input_edit_product_seller">
                @error('price')
                    <p style="color:red" class="f-11" dir="rtl" align="center">{{ $message }}</p>
                @enderror
                <div class="line"></div>
                <h4 dir="rtl" class="set-fornt color-b-700">منوها</h3>
                <label for="image" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">تصویر اصلی</label>
                <input @error('image') style="border:1px solid red"  @enderror type="file" name="image" class="input_edit_product_seller">
                @error('image')
                    <p style="color:red" class="f-11" dir="rtl" align="center">{{ $message }}</p>
                @enderror
                <label for="menu_id" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">منو اصلی</label>
                <select v-model="seller_menu_1" class="item-select-seller" name="menu_id" id="menu_id">
                    @foreach ($all_menus as $all_menu)
                        <option value="{{ $all_menu->id }}">{{ $all_menu->name }}</option>
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
                <div class="line"></div>
                <label for="brand_id" class="label-form-register-login text-right col-md-4 col-form-label text-md-right">برند</label>
                <select class="item-select-seller" name="brand_id" id="brand_id">
                    @foreach ($brand_all as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
                <button style="padding:20px" class="btn-logout" type="submit">ایجاد</button>
            </form>
            <p class="set-font f-12" style="color:red" align="center" dir="rtl">برای ساخت ویژگی ها ، ویژگی های فیلتر و تصاویر باید بعد از ساخت محصول اقدام کنید از قسمت پنل فروشنده ، محصولات و به روی دکمه ویرایش کلیک کنید </p>
        </div>
    </div>
</div>
