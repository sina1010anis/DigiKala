<div class="view-title-menu set-font f-17" align="center">مدریت ادرس ها</div>
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
            <th>شهر</th>
            <th>خیابان</th>
            <th>ادرس دقیق</th>
            <th>کاربر</th>
            <th>حذف</th>
        </tr>
        @foreach($addresses as $item)
            <tr class="f-13">
                <td>{{$item->id}}</td>
                <td>{{$item->citys->name}}</td>
                <td>{{$item->streets->name}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->users->name}}</td>
                <td><a href="{{route('admin.delete.address' ,$item->id )}}" class="btn-delete">حذف</a></td>
            </tr>
        @endforeach
    </table>
</div>
{{$addresses->links()}}
