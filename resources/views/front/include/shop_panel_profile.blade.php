<div class="box-shop">
    <p align="right" dir="rtl" class="f-19 set-font"><span
            class="color-b-500">فروشگاه فروشنده </span><span>{{$user->name}}</span></p>
</div>
@include('front.include.nav_bar_panel')
<div class="menu-view">
    <div class="view-menu-product" style="width: 100%">
        <div class="sm-filter">
            <div class="view-product-menu-search" style="background-color: unset">
                <div class="group-profile-user">
                    <div>
                        <div class="view-option-profile" style="width: 100%"><i class="fas fa-ellipsis-v fl-right color-b-700"
                                                            aria-hidden="true"></i>
                            <div class="fl-left" style="padding: 10px; box-sizing: border-box;">
                                <div class="group-save-product" style="position: relative;"><span
                                        class="view-profile-index-user-buy fl-left view-profile-index-user-buy-test"
                                        style="width: 100% !important;"><span><h4 class="set-font color-b-700"
                                                                                  align="right">پروفایل</h4><span
                                                class="line fl-right"></span><span class="view-list-buy"
                                                                                   style="padding: 10px; box-sizing: border-box; background-color: unset; overflow-y: unset;"><span
                                                    class="fl-right part-1-profile part-profile"><span
                                                        class="view-item fl-right"><i class="fas fa-pen f-14"
                                                                                      aria-hidden="true"></i><p
                                                            align="right"
                                                            class="set-font f-15 color-b-900">نام کاربری</p><p
                                                            align="right"
                                                            class="set-font f-14 color-b-600">sina</p></span><span
                                                        class="line fl-right"></span><span class="view-item fl-right"><i
                                                            class="fas fa-pen f-14" aria-hidden="true"></i><p
                                                            align="right" class="set-font f-15 color-b-900">ایمیل</p><p
                                                            align="right" class="set-font f-14 color-b-600">sina1010anis@gmail.com</p></span><span
                                                        class="line fl-right"></span><span class="view-item fl-right"><i
                                                            class="fas fa-pen f-14" aria-hidden="true"></i><p
                                                            align="right" class="set-font f-15 color-b-900">موبایل</p><p
                                                            align="right" class="set-font f-14 color-b-600">-</p></span><span
                                                        class="line fl-right"></span><span class="view-item fl-right"><i
                                                            class="fas fa-pen f-14" aria-hidden="true"></i><p
                                                            align="right" class="set-font f-15 color-b-900">کد ملی</p><p
                                                            align="right" class="set-font f-14 color-b-600">-</p></span><span
                                                        class="line fl-right"></span></span><span
                                                    class="fl-left part-2-profile part-profile"><span
                                                        class="view-item fl-right"><p align="right"
                                                                                      class="set-font f-15 color-b-900">گوگل ایدی</p><p
                                                            align="right" class="set-font f-14 color-b-600">-</p></span><span
                                                        class="line fl-right"></span><span class="view-item fl-right"><p
                                                            align="right"
                                                            class="set-font f-15 color-b-900">تاییده ایمیل</p><p
                                                            align="right" class="set-font f-14 color-b-600">-</p></span><span
                                                        class="line fl-right"></span><span class="view-item fl-right"><i
                                                            class="fas fa-pen f-14" aria-hidden="true"></i><p
                                                            align="right" class="set-font f-15 color-b-900">پسورد</p><p
                                                            align="right" class="set-font f-14 color-b-600">غیر قابل نمایش</p></span><span
                                                        class="line fl-right"></span><span class="view-item fl-right"><p
                                                            align="right"
                                                            class="set-font f-15 color-b-900">ادرس ثبت شده</p><p
                                                            align="right" class="set-font f-14 color-b-600">بلوار یک بلوار یک</p></span><span
                                                        class="line fl-right"></span></span></span></span></span></div>
                                <div class="group-page-edit-profile">
                                    <div
                                        class="username group-form-new-comment group-input-for-login-register group-form-new-address"
                                        style="display: none;"><h4 class="set-font color-b-800" align="center">تغییر نام
                                            کاربری</h4>
                                        <div class="line"></div>
                                        <form action="http://localhost:8000/user/edit/name" class="form-new-address"
                                              method="post"><input type="hidden" name="_token"
                                                                   value="Kn1pmwUD1YD5M5Hbx3ONPC6csToEpHBjDF4UH14T">
                                            <input type="text" class="input-edit set-font f-14"
                                                   placeholder="نام جدید..." name="name">
                                            <div class="line"></div>
                                            <button class="cls" type="button">بستن پنجره</button>
                                            <button type="submit">تغییر</button>
                                        </form>
                                    </div>
                                    <div
                                        class="email group-form-new-comment group-input-for-login-register group-form-new-address"
                                        style="display: none;"><h4 class="set-font color-b-800" align="center">تغییر
                                            ایمیل</h4>
                                        <div class="line"></div>
                                        <form action="http://localhost:8000/user/edit/email" class="form-new-address"
                                              method="post"><input type="hidden" name="_token"
                                                                   value="Kn1pmwUD1YD5M5Hbx3ONPC6csToEpHBjDF4UH14T">
                                            <input type="text" class="input-edit set-font f-14"
                                                   placeholder="ایمیل جدید..." name="email">
                                            <div class="line"></div>
                                            <button class="cls" type="button">بستن پنجره</button>
                                            <button type="submit">تغییر</button>
                                        </form>
                                    </div>
                                    <div
                                        class="mobile group-form-new-comment group-input-for-login-register group-form-new-address">
                                        <h4 class="set-font color-b-800" align="center">شماره موبایل</h4>
                                        <div class="line"></div>
                                        <form action="http://localhost:8000/user/edit/mobile" class="form-new-address"
                                              method="post" name="mobile"><input type="hidden" name="_token"
                                                                                 value="Kn1pmwUD1YD5M5Hbx3ONPC6csToEpHBjDF4UH14T">
                                            <input type="text" class="input-edit set-font f-14"
                                                   placeholder="موبایل جدید..." name="mobile">
                                            <div class="line"></div>
                                            <button class="cls" type="button">بستن پنجره</button>
                                            <button type="submit">تغییر</button>
                                        </form>
                                    </div>
                                    <div
                                        class="code group-form-new-comment group-input-for-login-register group-form-new-address">
                                        <h4 class="set-font color-b-800" align="center">کد ملی</h4>
                                        <div class="line"></div>
                                        <form action="http://localhost:8000/user/edit/code" class="form-new-address"
                                              method="post"><input type="hidden" name="_token"
                                                                   value="Kn1pmwUD1YD5M5Hbx3ONPC6csToEpHBjDF4UH14T">
                                            <input type="text" class="input-edit set-font f-14" placeholder="کد ملی"
                                                   name="code">
                                            <div class="line"></div>
                                            <button class="cls" type="button">بستن پنجره</button>
                                            <button type="submit">تغییر</button>
                                        </form>
                                    </div>
                                    <div
                                        class="password group-form-new-comment group-input-for-login-register group-form-new-address"
                                        style="display: none;"><h4 class="set-font color-b-800" align="center">تغییر
                                            پسورد</h4>
                                        <div class="line"></div>
                                        <form action="http://localhost:8000/user/edit/password" class="form-new-address"
                                              method="post"><input type="hidden" name="_token"
                                                                   value="Kn1pmwUD1YD5M5Hbx3ONPC6csToEpHBjDF4UH14T">
                                            <input type="password" class="input-edit set-font f-14"
                                                   placeholder="ادرس جدید" name="password"><input type="password"
                                                                                                  class="input-edit set-font f-14"
                                                                                                  placeholder="تکرار پسورد"
                                                                                                  name="password_confirmation">
                                            <div class="line"></div>
                                            <button class="cls" type="button">بستن پنجره</button>
                                            <button type="submit">تغییر</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
