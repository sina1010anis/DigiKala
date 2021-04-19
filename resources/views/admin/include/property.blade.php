<div class="view-title-menu set-font f-17" align="center">مدریت ویژگی محصولات</div>
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
            <th>موضوع</th>
            <th>نام</th>
            <th>هدف</th>
            <th>حذف</th>
        </tr>
        @foreach($properties_product as $item)
            <tr class="f-13 tr-view-item-table-admin">
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->products->name}}</td>
                <td><a href="{{route('admin.delete.deleteProperty' ,$item->id )}}" class="btn-delete">حذف</a></td>
            </tr>
        @endforeach
    </table>
</div>
<br>
<a @click="showPageCreate" class="btn-create" style="cursor: pointer">جدید</a>
<br>
<br>
<div class="group-form-new-comment group-input-for-login-register page-create-admin">
    <h4 class="set-font color-b-800" align="center">شهر جدید</h4>
    <div class="line"></div>
    <form action="{{route('admin.createAdmin.createProperty')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="موضوع ....">
        @error('title')
        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
        @enderror
        <input type="text" name="name" placeholder="نام ....">
        @error('name')
        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
        @enderror
        <span style="width: 100%" class="group-not-good-product fl-left">
                <p class="set-font color-b-700 f-10" align="center">هدف</p>
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
