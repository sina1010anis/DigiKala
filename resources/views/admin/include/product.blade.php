<div class="view-title-menu set-font f-17" align="center">مدریت محصولات</div>
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
            <th>نام</th>
            <th>قیمت</th>
            <th>عکس</th>
            <th>توضیحات</th>
            <th>تخفیف</th>
            <th>منو اصلی</th>
            <th>زیر منو</th>
            <th>برند</th>
            <th>تاریخ انتشار</th>
            <th>حذف</th>
            <th>ویرایش</th>
            <th>امکانات</th>
        </tr>
        @foreach($products_all_admin as $item)
            <tr class="f-13 tr-view-item-table-admin">
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td><img src="{{url('data/image/image product').'/'.$item->image}}" alt="{{$item->name}}"
                         title="{{$item->name}}"></td>
                <td>{{\Illuminate\Support\Str::limit($item->name , 20)}}</td>
                <?php
                if ($item->off == 0){
                echo '                <td><p>بدون تخفیف</p></td>
                ';
                }else {
                echo '                <td><p class="btn-war">تخفیف '.$item->off.'%</p></td>';
                }
                ?></td>
                <td>{{$item->all_menus->name}}</td>
                <td>{{$item->down_all_menus->name}}</td>
                <td>{{$item->brands->name}}</td>
                <td>{{jdate($item->created_at)->format('%A, %d %B %y')}}</td>
                <td><a href="{{route('admin.delete.deleteProduct' ,$item->slug )}}" class="btn-delete">حذف</a></td>
                <td><a href="{{route('admin.edit.product' ,$item->slug )}}" class="btn-create">ویرایش</a></td>
                <td><a @click="showEMproduct('{{$item->id}}')" style="cursor: pointer" class="btn-create">امکانات</a></td>
            </tr>
        @endforeach
    </table>
</div>
{{$products_all_admin->links()}}
<br>
<a @click="showPageCreate" class="btn-create" style="cursor: pointer">جدید</a>
<br>
<br>
<div class="group-form-new-comment group-input-for-login-register page-create-admin">
    <h4 class="set-font color-b-800" align="center">محصول جدید</h4>
    <div class="line"></div>
    <form action="{{route('admin.createAdmin.createProduct')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="نام ....">
        @error('name')
        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
        @enderror
        <input type="number" name="price" placeholder="قیمت ....">
        @error('price')
        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
        @enderror
        <textarea type="text" name="des" placeholder="توضیحات ...."></textarea>
        @error('des')
        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
        @enderror
        <input type="text" name="off" placeholder="مقدار تخفیف مثل 10">
        @error('off')
        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
        @enderror
        <input type="file" name="img">
        @error('img')
        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
        @enderror
        <span style="width: 100%" class="group-not-good-product fl-left">
                <p class="set-font color-b-700 f-10" align="center">منو اصلی</p>
                <select style="width: 100%;" class="fl-left" name="menu_id" id="">
                    @foreach($sub_all_menus as $item)
                        <option value="{{$item->id}}">{{$item->name}} - {{$item->id}}</option>
                    @endforeach
                </select>
            </span>
        <span style="width: 100%" class="group-not-good-product fl-left">
                <p class="set-font color-b-700 f-10" align="center">زیر منو</p>
                <select style="width: 100%;" class="fl-left" name="sub_menu" id="">
                    @foreach($sub_ll_menu as $item)
                        <option value="{{$item->id}}">{{$item->name}} - {{$item->id}}</option>
                    @endforeach
                </select>
            </span>
        <span style="width: 100%" class="group-not-good-product fl-left">
                <p class="set-font color-b-700 f-10" align="center">برند</p>
                <select style="width: 100%;" class="fl-left" name="brand" id="">
                    @foreach($brand_all as $item)
                        <option value="{{$item->id}}">{{$item->name}} - {{$item->id}}</option>
                    @endforeach
                </select>
            </span>
        <button type="submit" style="outline: none">ثبت</button>
    </form>
</div>
<div class="group-form-new-comment group-input-for-login-register selectEm ">
    <h4 class="set-font color-b-800" align="center">انتخاب کنید</h4>
    <div class="line"></div>
    <div class="center-obj">
    <a href="{{route('admin.imageProduct')}}"  class="btn-war">تک عکس</a>
    <a  class="btn-war">ویژگی ها</a>
    </div>

</div>
<div class="blur-web" @click="hideAllPage"></div>
