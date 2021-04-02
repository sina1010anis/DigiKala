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
                        <h3>ثبت نام</h3>
                    </div>
                    <div class="group-input-for-login-register">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="input-pass">
                                    <label for="password"
                                           class="label-form-register-login text-right col-md-4 col-form-label text-md-right"></label>

                                    <div class="col-md-6">
                                        <input value="{{old('name')}}" placeholder="نام" id="password" type="text"
                                               class="input-register-S fl-right form-control @error('password') err-input-form-register-login @enderror"
                                               name="name">


                                    </div>
                                </div>
                                <div class="input-pass">
                                    <label for="password"
                                           class="label-form-register-login text-right col-md-4 col-form-label text-md-right"></label>

                                    <div class="col-md-6">
                                        <input value="{{old('email')}}"  placeholder="ایمیل" id="password" type="email"
                                               class="input-register-S fl-left form-control @error('password') err-input-form-register-login @enderror"
                                               name="email">


                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="input-pass">
                                    <label for="password"
                                           class="label-form-register-login text-right col-md-4 col-form-label text-md-right"></label>

                                    <div class="col-md-6">
                                        <input  placeholder="رمز عبور" id="password" type="password"
                                               class="input-register-S fl-right form-control @error('password') err-input-form-register-login @enderror"
                                               name="password">


                                    </div>
                                </div>
                                <div class="input-pass">
                                    <label for="password"
                                           class="label-form-register-login text-right col-md-4 col-form-label text-md-right"></label>

                                    <div class="col-md-6">
                                        <input placeholder="تکرار رمز عبور" id="password" type="password"
                                               class="input-register-S fl-left form-control @error('password') err-input-form-register-login @enderror"
                                               name="password_confirmation">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn-form-for-login-register btn btn-primary">
                                        {{ __('ثبت نام در دیجی کالا') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="text-right btn btn-link btn-forget-password"
                                           href="{{ route('login') }}">
                                            {{ __('صفحه ورود') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
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


{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
