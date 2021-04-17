<div class="view-title-menu set-font f-17" align="center">مدریت برندها</div>
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
            <th>حذف</th>
        </tr>
        @foreach($brand_all as $item)
            <tr class="f-13 tr-view-item-table-admin">
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td><img src="{{url('data/image/image_brand').'/'.$item->image}}" alt="{{$item->name}}"
                         title="{{$item->name}}"></td>
                <td><a href="{{route('admin.delete.deleteBrand' ,$item->id )}}" class="btn-delete">حذف</a></td>
            </tr>
        @endforeach
    </table>
</div>
<br>
<a @click="showPageCreate" class="btn-create" style="cursor: pointer">جدید</a>
<br>
<br>
<div class="group-form-new-comment group-input-for-login-register page-create-admin">
    <h4 class="set-font color-b-800" align="center">برند جدید</h4>
    <div class="line"></div>
    <form action="{{route('admin.create.createBrand')}}" method="post" enctype="multipart/form-data">
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
        <button type="submit" style="outline: none">ثبت</button>
    </form>
</div>
<div class="blur-web" @click="hideAllPage"></div>
