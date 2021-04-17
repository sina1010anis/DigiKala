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
            <th>هدف</th>
            <th>رای های مفید</th>
            <th>رای های نامفید</th>
            <th>وضعیت</th>
            <th>موضوع</th>
            <th>متن</th>
            <th>تاریخ ارسال</th>
            <th>حذف</th>
        </tr>
        @foreach($comment_all_panel_admin as $item)
            <tr class="f-13 tr-view-item-table-admin">
                <td>{{$item->id}}</td>
                <td>{{$item->users->name}}</td>
                <td>{{$item->products->name}}</td>
                <td><p v-for="i in {{$item->vote_good}}">@{{ i }}</p></td>
                <td><p v-for="i in {{$item->vote_bad}}">@{{ i }}</p></td>
                <td><?php
                    if ($item->status == 1){
                        echo 'فعال';
                    }else {
                        echo 'غیر فعال';
                    }
                    ?></td>
                <td>{{$item->title}}</td>
                <td>{{$item->text}}</td>
                <td>{{jdate($item->created_at)->format('%A, %d %B %y')}}</td>
                <td><a href="{{route('admin.delete.deleteCommentProduct' ,$item->id )}}" class="btn-delete">حذف</a></td><?php
                    if ($item->status == 1){
                        echo '                <td><a href="'.route('admin.inactive.commentProduct' ,$item->id ).'" class="btn-war">غیر فعال</a></td>
';
                    }else {
                        echo '                <td><a href="'.route('admin.inactive.commentProduct' ,$item->id ).'" class="btn-war"> فعال</a></td>';
                    }
                    ?></td>
            </tr>
        @endforeach
    </table>
</div>
{{$comment_all_panel_admin->links()}}
<div class="blur-web" @click="hideAllPage"></div>
