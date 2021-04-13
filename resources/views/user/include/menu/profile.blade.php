<div class="group-save-product" style="position: relative">
    <span style="width: 100%!important;" class="view-profile-index-user-buy fl-left view-profile-index-user-buy-test">
        <span>
            <h4 class="set-font color-b-700" align="right">پروفایل</h4>
            <span class="line fl-right"></span>
            <span class="view-list-buy"
                  style="padding: 10px;box-sizing: border-box;background-color: unset;overflow-y: unset">
                <span class="fl-right part-1-profile part-profile">
                    <span class="view-item fl-right">
                        <i @click="showPageEdit('username')" class="fas fa-pen f-14 "></i>
                        <p align="right" class="set-font f-15 color-b-900">نام کاربری</p>
                        <p align="right" class="set-font f-14 color-b-600">{{auth()->user()->name}}</p>
                    </span>
                    <span class="line fl-right"></span>
                    <span class="view-item fl-right">
                                                <i @click="showPageEdit('email')" class="fas fa-pen f-14 "></i>

                        <p align="right" class="set-font f-15 color-b-900">ایمیل</p>
                        <p align="right" class="set-font f-14 color-b-600">{{auth()->user()->email}}</p>
                    </span>
                    <span class="line fl-right"></span>
                    <span class="view-item fl-right">
                                                <i @click="showPageEdit('mobile')" class="fas fa-pen f-14 "></i>

                        <p align="right" class="set-font f-15 color-b-900">موبایل</p>
                                                @if(auth()->user()->mobile == 'null')
                            <p align="right" class="set-font f-14 color-b-600">-</p>
                        @else
                            <p align="right" class="set-font f-14 color-b-600">{{auth()->user()->mobile}}</p>
                        @endif
                    </span>
                    <span class="line fl-right"></span>
                    <span class="view-item fl-right">
                                                <i @click="showPageEdit('code')" class="fas fa-pen f-14 "></i>

                        <p align="right" class="set-font f-15 color-b-900">کد ملی</p>
                        @if(auth()->user()->code_m == 'null')
                            <p align="right" class="set-font f-14 color-b-600">-</p>
                        @else
                            <p align="right" class="set-font f-14 color-b-600">{{auth()->user()->code_m}}</p>
                        @endif
                    </span>
                    <span class="line fl-right"></span>
                </span>
                <span class="fl-left part-2-profile part-profile">
                    <span class="view-item fl-right">
                        <p align="right" class="set-font f-15 color-b-900">گوگل ایدی</p>
                        @if(auth()->user()->google_id == null)
                            <p align="right" class="set-font f-14 color-b-600">-</p>
                        @else
                            <p align="right"
                               class="set-font f-14 color-b-600">{{\Illuminate\Support\Str::limit(auth()->user()->google_id , 5)}}</p>
                        @endif
                    </span>
                    <span class="line fl-right"></span>

                                        <span class="view-item fl-right">
                        <p align="right" class="set-font f-15 color-b-900">تاییده ایمیل</p>
                        @if(auth()->user()->email_verified_at == null)
                                                <p align="right" class="set-font f-14 color-b-600">-</p>
                                            @else
                                                <p align="right"
                                                   class="set-font f-14 color-b-600">{{jdate(auth()->user()->email_verified_at)->format('%A, %d %B %y')}}</p>
                                            @endif
                    </span>
                    <span class="line fl-right"></span>

                                                            <span class="view-item fl-right">
                                                                                        <i @click="showPageEdit('password')" class="fas fa-pen f-14 "></i>

                        <p align="right" class="set-font f-15 color-b-900">پسورد</p>
                                                                    <p align="right" class="set-font f-14 color-b-600">غیر قابل نمایش</p>
                    </span>
                    <span class="line fl-right"></span>
                                                                                <span class="view-item fl-right">

                        <p align="right" class="set-font f-15 color-b-900">ادرس ثبت شده</p>
@if(auth()->user()->address_id != 0)
                                                                                    @foreach($address_all as $i)
                                                                                        @if($i->id == auth()->user()->address_id)
                                                                                            <p align="right"
                                                                                               class="set-font f-14 color-b-600">{{$i->address}}</p>
                                                                                        @endif
                                                                                    @endforeach
                                                                                    @else
                                                                                        <p align="right" class="set-font f-14 color-b-600">-</p>

                                                                                    @endif
                    </span>
                    <span class="line fl-right"></span>
                </span>
            </span>
        </span>
    </span>
</div>
<div class="group-page-edit-profile">
    <div class="username group-form-new-comment group-input-for-login-register group-form-new-address">
        <h4 class="set-font color-b-800" align="center">تغییر نام کاربری</h4>
        <div class="line"></div>
        <form action="{{route('user.edit.name')}}" class="form-new-address" method="post">
            @csrf
            <input type="text" class="input-edit set-font f-14" placeholder="نام جدید..." name="name">
            @error('name')
            <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
            @enderror
            <div class="line"></div>
            <button @click="exitPageNewAddress" class="cls" type="button">بستن پنجره</button>
            <button type="submit">تغییر</button>
        </form>
    </div>
    <div class="email group-form-new-comment group-input-for-login-register group-form-new-address">
        <h4 class="set-font color-b-800" align="center">تغییر ایمیل</h4>
        <div class="line"></div>
        <form action="{{route('user.edit.email')}}" class="form-new-address" method="post">
            @csrf
            <input type="text" class="input-edit set-font f-14" placeholder="ایمیل جدید..." name="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
            @enderror
            <div class="line"></div>
            <button @click="exitPageNewAddress" class="cls" type="button">بستن پنجره</button>
            <button type="submit">تغییر</button>
        </form>
    </div>
    <div class="mobile group-form-new-comment group-input-for-login-register group-form-new-address">
        <h4 class="set-font color-b-800" align="center">شماره موبایل</h4>
        <div class="line"></div>
        <form action="{{route('user.edit.mobile')}}" class="form-new-address" method="post" name="mobile">

            @csrf
            <input type="text" class="input-edit set-font f-14" placeholder="موبایل جدید..." name="mobile">
            @error('mobile')
            <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
            @enderror
            <div class="line"></div>
            <button @click="exitPageNewAddress" class="cls" type="button">بستن پنجره</button>
            <button type="submit">تغییر</button>
        </form>
    </div>
    <div class="code group-form-new-comment group-input-for-login-register group-form-new-address">
        <h4 class="set-font color-b-800" align="center">کد ملی</h4>
        <div class="line"></div>
        <form action="{{route('user.edit.code')}}" class="form-new-address" method="post">
            @csrf
            <input type="text" class="input-edit set-font f-14" placeholder="کد ملی" name="code">
            @error('code')
            <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
            @enderror
            <div class="line"></div>
            <button @click="exitPageNewAddress" class="cls" type="button">بستن پنجره</button>
            <button type="submit">تغییر</button>
        </form>
    </div>
    <div class="password group-form-new-comment group-input-for-login-register group-form-new-address">
        <h4 class="set-font color-b-800" align="center">تغییر پسورد</h4>
        <div class="line"></div>
        <form action="{{route('user.edit.password')}}" class="form-new-address" method="post">
            @csrf
            <input type="password" class="input-edit set-font f-14" placeholder="ادرس جدید" name="password">
            <input type="password" class="input-edit set-font f-14" placeholder="تکرار پسورد" name="password_confirmation">
            <div class="line"></div>
            <button @click="exitPageNewAddress" class="cls" type="button">بستن پنجره</button>
            <button type="submit">تغییر</button>
        </form>
    </div>
</div>
