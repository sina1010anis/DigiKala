<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ورود</title>
    <script src="https://kit.fontawesome.com/d4c29863c5.js" crossorigin="anonymous"></script>
</head>
<body style="background-color:white">
<div id="shit">
    <div id="row">
        <div id="app">
            <div class="page-group-form">
                <div class="group-login-register">
                    <div class="group-logo-for-form-login-register">
                        <img src="{{url('data/image/digikala-3.png')}}" alt="">
                    </div>
                    <div class="group-text-for-form-login-register">
                        <h3>پرداختی</h3>
                    </div>
                    @yield('page')
                    <p class="p-el" align="center">با ورود و یا ثبت نام در دیجی‌کالا شما شرایط و قوانین استفاده از سرویس های سایت دیجی‌کالا و قوانین حریم خصوصی آن را می‌پذیرید.</p>
                    <div class="view-err">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                        @enderror
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                        @enderror
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{url('js/app.js')}}"></script>
</body>
</html>
