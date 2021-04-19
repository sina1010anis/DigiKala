<div class="view-product-one">
    @foreach($image_products as $item)
        @if($item->product_id == $id->id)
            <img src="{{url('data/image/image one product').'/'.$item->address}}" alt="">
        @endif
    @endforeach
    <img style="border: 1px solid red" src="{{url('data/image/image product').'/'.$id->image}}" alt="">
        @foreach($properties_product as $item)
            @if($item->product_id == $id->id)
                <p dir="rtl" align="right" class="set-font f-12 color-b-700">{{'موضوع .'.$item->title.' - '.'مقدار .'.$item->name}}</p>
            @endif
        @endforeach
    <form action="{{route('admin.edit.updateProduct' , $id->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="نام ...." value="{{$id->name}}">
        @error('name')
        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
        @enderror
        <input type="number" name="price" placeholder="قیمت ...." value="{{$id->price}}">
        @error('price')
        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
        @enderror
        <textarea type="text" name="description" placeholder="توضیحات ....">{{$id->description}}</textarea>
        @error('des')
        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
        @enderror
        <input type="text" name="off" placeholder="مقدار تخفیف مثل 10" value="{{$id->off}}">
        @error('off')
        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
        @enderror
        <span style="width: 100%" class="group-not-good-product fl-left">
                <p class="set-font color-b-700 f-10" align="center">منو اصلی</p>
                <select style="width: 100%;" class="fl-left" name="menu_id" id="">
                    @foreach($sub_all_menus as $item)
                        <option <?php echo ($item->id == $id->menu_id) ? 'selected' : ''; ?> value="{{$item->id}}">{{$item->name}} - {{$item->id}}</option>
                    @endforeach
                </select>
            </span>
        <span style="width: 100%" class="group-not-good-product fl-left">
                <p class="set-font color-b-700 f-10" align="center">زیر منو</p>
                <select style="width: 100%;" class="fl-left" name="sub_menu_id" id="">
                    @foreach($sub_ll_menu as $item)
                        <option <?php echo ($item->id == $id->sub_menu_id) ? 'selected' : ''; ?> value="{{$item->id}}">{{$item->name}} - {{$item->id}}</option>
                    @endforeach
                </select>
            </span>
        <span style="width: 100%" class="group-not-good-product fl-left">
                <p class="set-font color-b-700 f-10" align="center">برند</p>
                <select style="width: 100%;" class="fl-left" name="brand_id" id="">
                    @foreach($brand_all as $item)
                        <option <?php echo ($item->id == $id->brand_id) ? 'selected' : ''; ?>  value="{{$item->id}}">{{$item->name}} - {{$item->id}}</option>
                    @endforeach
                </select>
            </span>
        <button type="submit" style="outline: none">ثبت</button>
    </form>
</div>
