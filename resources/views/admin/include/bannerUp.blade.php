<div class="view-title-menu set-font f-17" align="center">مدریت بنر های بالا</div>
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
            <th>ایدی محصول</th>
            <th>تایتل</th>
            <th>الت</th>
            <th>ادرس</th>
            <th>حذف</th>
        </tr>
        @foreach($banner_ups as $item)
            <tr class="f-13 tr-view-item-table-admin">
                <td>{{$item->id}}</td>
                <td>{{$item->products->name}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->alt}}</td>
                <td><img src="{{url('data/image/image banner').'/'.$item->address}}" alt="{{$item->alt}}"
                         title="{{$item->address}}"></td>
                <td><a href="{{route('admin.delete.deleteBannerUp' ,$item->id )}}" class="btn-delete">حذف</a></td>
            </tr>
        @endforeach
    </table>
</div>
<br>
<a @click="showPageCreate" class="btn-create" style="cursor: pointer">جدید</a>
<br>
<br>
<div class="group-form-new-comment group-input-for-login-register page-create-admin">
    <h4 class="set-font color-b-800" align="center">ایتم جدید فیلتر</h4>
    <div class="line"></div>
    <form action="{{route('admin.create.createBannerUp')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="نام ....">
        @error('name')
        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
        @enderror
        <input type="file" name="file">
        @error('file')
        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
        @enderror
        <span style="width: 100%" class="group-not-good-product fl-left">
                <p class="set-font color-b-700 f-10" align="center">محصول</p>
                <select style="width: 100%;" class="fl-left" name="product_id" id="">
                    @foreach($sub_all_menus as $i)
                        <optgroup label="{{$i->name}}">
                            @foreach($products_all as $item)
                                @if($item->menu_id == $i->id)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endif
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>
            </span>
        <button type="submit" style="outline: none">ثبت</button>
    </form>
</div>
<div class="blur-web" @click="hideAllPage"></div>
