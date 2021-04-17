<div class="view-title-menu set-font f-17" align="center">مدریت ایتم فیلتر ها</div>
<div class="view-item-table">
    <style>
        path{
            display: none!important;
        }
        .relative{
            padding: 5px 20px!important;
            background-color: yellow!important;
        }
    </style>
    <table>
        <tr>
            <th>ایدی</th>
            <th>نام</th>
            <th>ایدی فیلتر اصلی</th>
            <th>نوع دسته</th>
            <th>حذف</th>
        </tr>
        @foreach($attr_filter as $item)
            <tr class="f-13">
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->title_filters->name}}</td>
                <td>{{$item->title_filters->sub_menus->name}}</td>
                <td><a href="{{route('admin.delete.attrFilter' ,$item->id )}}" class="btn-delete">حذف</a></td>
            </tr>
        @endforeach
    </table>
</div>
<br>
<a @click="showPageCreate" class="btn-create" style="cursor: pointer">جدید</a>
<br>
<br>
{{$attr_filter->links()}}
<div class="group-form-new-comment group-input-for-login-register page-create-admin">
    <h4 class="set-font color-b-800" align="center">ایتم جدید فیلتر</h4>
    <div class="line"></div>
    <form  action="{{route('admin.create.attrFilter')}}" method="post">
        @csrf
        <input v-model="text_title" type="text" name="name" placeholder="نام ....">
        @error('name')
        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
        @enderror
        <span style="width: 100%" class="group-not-good-product fl-left">
                <p class="set-font color-b-700 f-10" align="center">فیلتر</p>
                <select style="width: 100%;" class="fl-left" name="title_filter_id" id="">
                    @foreach($title_filter as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </span>
        <button type="submit" style="outline: none">ثبت</button>
    </form>
</div>
<div class="blur-web" @click="hideAllPage"></div>
