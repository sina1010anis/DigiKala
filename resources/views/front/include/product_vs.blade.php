<style>
    footer {
        float: right !important;
    }
</style>
<div class="view-all-product-vs w-100">
    <span class="view-product-1 fl-right w-50">
        <div class="center-obj">
            <img src="{{url(('data/image/image product').'/'.$product_1->image)}}" alt="">
        </div>
        <table dir="rtl" align="center" class="table set-font">
            <tbody>
            @foreach($attr_product_1 as $attr_product)
                    <tr>
                        <th align="right" class="color-b-700 set-font f-13"
                            scope="row">{{$attr_product->title_filters->name}}</th>
                        <td align="right" class="color-b-800 set-font f-12">{{$attr_product->attr_filters->name}}</td>
                    </tr>
            @endforeach
            </tbody>
        </table>
    </span>
    <span class="view-product-2 fl-left w-50">
        <div class="center-obj">
            <img src="{{url(('data/image/image product').'/'.$product_2->image)}}" alt="">
        </div>
                <table dir="rtl" align="center" class="table set-font">
            <tbody>
            @foreach($attr_product_2 as $attr_product)
                <tr>
                        <th align="right" class="color-b-700 set-font f-13"
                            scope="row">{{$attr_product->title_filters->name}}</th>
                        <td align="right" class="color-b-800 set-font f-12">{{$attr_product->attr_filters->name}}</td>
                    </tr>
            @endforeach
            </tbody>
        </table>
    </span>
</div>

