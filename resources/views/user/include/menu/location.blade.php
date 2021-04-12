@if($address_all->count() > 0)
    <div class="group-save-product" style="position:relative;">
    <span style="width: 100%!important;" class="view-profile-index-user-buy fl-left view-profile-index-user-buy-test">
        <span>
            <button class="set-font f-12 color-b-600 btn-new-address" @click="showPageNewAddress">اضافه کردن</button>
            <button class="set-font f-12 color-b-600 btn-new-address btn-save-address" v-if="(view_btn_save_address)? style : ''" @click="setAddressPanelUser">اعمال تغییرات</button>
            <h4 class="set-font color-b-700" align="right">ادرس های شما</h4>
            <span class="line fl-right"></span>
            <span class="view-list-buy" style="padding: 10px;box-sizing: border-box;background-color: unset">
                <form action="">
                    @foreach($address_all as $address)
                        <div @if(auth()->user()->address_id == $address->id) style="background-color: #ecf5ff" @endif  class="group-item-address">
                            <input @if(auth()->user()->address_id == $address->id) checked @endif @click="set_view_btn_save_address" type="radio" v-model="id_check_box" name="set_address" value="{{$address->id}}" id="select{{$address->id}}">
                            <label class="set-font f-14 color-b-700" for="select{{$address->id}}">{{$address->citys->name}} . {{$address->streets->name}}</label>
                            <span class="set-font fl-right f-13 color-b-800">{{$address->address}}</span>
                        </div>
                    @endforeach
                </form>
            </span>
        </span>
    </span>
</div>
@else
    <div class="group-null">
        <img src="{{url('data/image/icon/location.png')}}" alt="">
        <p class="f-20 color-b-400 set-font">ادرسی درج نشده است</p>
        <button style="position: unset!important;" class="set-font f-12 color-b-600 btn-new-address" @click="showPageNewAddress">اضافه کردن</button>
    </div>
@endif
<div class="group-form-new-comment group-input-for-login-register group-form-new-address">
    <h4 class="set-font color-b-800" align="center">ادرس جدید</h4>
    <div class="line"></div>
    <form action="{{route('user.newAddress')}}" class="form-new-address" method="post">
        @csrf
        <select v-model="id_city" class="fl-right set-font" name="city_id" id="">
            @foreach($all_city as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
            @endforeach
        </select>
        <select class="fl-left set-font" name="street_id" id="">
            @foreach($all_street as $street)
                <option v-if="id_city == {{$street->city_id}}" value="{{$street->id}}">{{$street->name}}</option>
            @endforeach
        </select>
        <textarea name="address" class="set-font" placeholder="ادرس دقیق مثل : ستارخان 15 - پلاک 52 - طبقه دوم"></textarea>
        @error('address')
        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
        @enderror
        <button @click="exitPageNewAddress" class="cls" type="button">بستن پنجره</button>
        <button type="submit">ثبت ادرس</button>
    </form>
</div>
<div class="view-err-sm"></div>
