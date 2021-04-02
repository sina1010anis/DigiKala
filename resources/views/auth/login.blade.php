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
                        <h3>ورود</h3>
                    </div>
                    <div class="group-input-for-login-register">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                       class="label-form-register-login text-right col-md-4 col-form-label text-md-right">{{ __('ادرس ایمیل') }}</label>

                                <div class="col-md-6">
                                    <input value="{{old('email')}}"  class="@error('email') err-input-form-register-login @enderror" id="email" type="email" name="email" value="{{ old('email') }}">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="label-form-register-login text-right col-md-4 col-form-label text-md-right">{{ __('رمز عبور') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') err-input-form-register-login @enderror" name="password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row group-check-box-form-login">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label style="position: relative;bottom: 3px"
                                               class="label-form-register-login form-check-label" for="remember">
                                            {{ __('منو به خاطر بسپار') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn-form-for-login-register btn btn-primary">
                                        {{ __('ورود به دیجی کالا') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="text-right btn btn-link btn-forget-password"
                                           href="{{ route('password.request') }}">
                                            {{ __('فراموشی رمز عبور') }}
                                        </a>
                                        <a class="text-right btn btn-link btn-forget-password"
                                           href="{{ route('register') }}">
                                            {{ __('صفحه ثبت نام') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="group-icon-google-form-login-register">
                                <a href="{{route('google_login')}}">
                                    <i class="fab fa-google" title="ورود با حساب گوگل"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{url('js/app.js')}}"></script>
</body>
</html>
