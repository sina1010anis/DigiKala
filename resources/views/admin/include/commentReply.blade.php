<div class="view-title-menu set-font f-17" align="center">مدریت کامت محصولات</div>
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
            <th>کامنت</th>
            <th>متن</th>
            <th>تاریخ ارسال</th>
            <th>حذف</th>
        </tr>
        @foreach($reply_comments as $item)
            <tr class="f-13 tr-view-item-table-admin">
                <td>{{$item->id}}</td>
                <td>{{$item->users->name}}</td>
                <td>{{$item->comment_products->id}}</td>
                <td>{{$item->text}}</td>
                <td>{{jdate($item->created_at)->format('%A, %d %B %y')}}</td>
                <td><a href="{{route('admin.delete.deleteReplyComment' ,$item->id )}}" class="btn-delete">حذف</a></td>
            </tr>
        @endforeach
    </table>
</div>
{{$comment_all_panel_admin->links()}}
<div class="blur-web" @click="hideAllPage"></div>
