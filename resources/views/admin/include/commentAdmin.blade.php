<div class="view-title-menu set-font f-17" align="center">مدریت کامت ادمین باری کاربر</div>
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
            <th>نام کاربر</th>
            <th>موضوع</th>
            <th>متن</th>
            <th>تاریخ ارسال</th>
            <th>حذف</th>
        </tr>
        @foreach($messages_admin as $item)
            <tr class="f-13 tr-view-item-table-admin">
                <td>{{$item->id}}</td>
                <td>{{$item->users->name}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->text}}</td>
                <td>{{jdate($item->created_at)->format('%A, %d %B %y')}}</td>
                <td><a href="{{route('admin.delete.deleteCommentAdmin' ,$item->id )}}" class="btn-delete">حذف</a></td>
            </tr>
        @endforeach
    </table>
</div>
{{$messages_admin->links()}}
<br>
<a @click="showPageCreate" class="btn-create" style="cursor: pointer">جدید</a>
<br>
<br>
<div class="group-form-new-comment group-input-for-login-register page-create-admin">
    <h4 class="set-font color-b-800" align="center">کامنت جدید</h4>
    <div class="line"></div>
    <form action="{{route('admin.createAdmin.createCommentAdmin')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="موضوع ....">
        @error('title')
        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
        @enderror
        <textarea type="text" name="text" placeholder="متن ...."></textarea>
        @error('text')
        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
        @enderror
        <span style="width: 100%" class="group-not-good-product fl-left">
                <p class="set-font color-b-700 f-10" align="center">کاربر</p>
                <select style="width: 100%;" class="fl-left" name="user_id" id="">
                    @foreach($users as $item)
                        <option value="{{$item->id}}">{{$item->name}} - {{$item->id}}</option>
                    @endforeach
                </select>
            </span>
        <button type="submit" style="outline: none">ثبت</button>
    </form>
</div>
<div class="blur-web" @click="hideAllPage"></div>
