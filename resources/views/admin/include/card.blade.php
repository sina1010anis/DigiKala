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
            <th>نام محصول</th>
            <th>تعداد</th>
            <th>قیمت</th>
            <th>کاربر</th>
            <th>وضعیت</th>
            <th>حذف</th>
        </tr>
        @foreach($cred_all as $item)
            <tr class="f-13 tr-view-item-table-admin">
                <td>{{$item->id}}</td>
                <td>{{$item->products->name}}</td>
                <td>{{$item->number}}</td>
                <td>{{$item->total_price}}</td>
                <td>{{$item->users->name}}</td>
                <td>{{($item->status == 0) ?'پرداخت نشده': 'پرداخت شده'}}</td>
                <td><a href="{{route('admin.delete.deleteBasket' ,$item->id )}}" class="btn-delete">حذف</a></td>
            </tr>
        @endforeach
    </table>
</div>
{{$cred_all->links()}}
