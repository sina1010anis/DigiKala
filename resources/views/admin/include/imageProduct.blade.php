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
            <th>عکس</th>
            <th>هدف</th>
            <th>حذف</th>
        </tr>
        @foreach($image_products as $item)
            <tr class="f-13 tr-view-item-table-admin">
                <td>{{$item->id}}</td>
                <td>{{$item->alt_title}}</td>
                <td><img src="{{url('data/image/image one product').'/'.$item->address}}" alt="{{$item->alt_title}}"
                         title="{{$item->alt_title}}"></td>
                <td>{{$item->products->name}}</td>
                <td><a href="{{route('admin.delete.deleteImageProduct' , $item->id)}}" class="btn-delete">حذف</a></td>
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
    <form action="{{route('admin.createAdmin.createImageProduct')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="نام ....">
        @error('name')
        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
        @enderror
        <input type="file" name="image" placeholder="نام ....">
        @error('file')
        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
        @enderror
        <span style="width: 100%" class="group-not-good-product fl-left">
                <p class="set-font color-b-700 f-10" align="center">برند</p>
                <select style="width: 100%;" class="fl-left" name="product_id" id="">
                    @foreach($products_all as $item)
                        <option value="{{$item->id}}">{{$item->name}} - {{$item->id}}</option>
                    @endforeach
                </select>
            </span>
        <button type="submit" style="outline: none">ثبت</button>
    </form>
</div>
<div class="blur-web" @click="hideAllPage"></div>
