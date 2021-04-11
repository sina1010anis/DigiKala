<div class="group-save-product">
    <span style="width: 100%!important;" class="view-profile-index-user-buy fl-left view-profile-index-user-buy-test">
        <span>
            <h4 class="set-font color-b-700" align="right">محصولات ذخیره شده</h4>
            <span class="line fl-right"></span>
            <span class="view-list-buy" style="padding: 10px;box-sizing: border-box;background-color: unset">
                @foreach($save_products as $save_product)
                    @if($save_product->user_id == auth()->user()->id)
                        <a class="view-product-save fl-right" href="{{route('product.show' , ['slug'=>$save_product->products->slug])}}">
                            <img src="{{url('data/image/image product/').'/'.$save_product->products->image}}"
                                 alt="{{$save_product->products->name}}" title="{{$save_product->products->name}}">
                        </a>
                    @endif
                @endforeach
            </span>
        </span>
    </span>
</div>
