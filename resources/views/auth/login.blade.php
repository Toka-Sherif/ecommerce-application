@extends('layouts.WebsiteLayouts.master')

@section('content')
    {{--    <div class="container">--}}
    {{--        <div class="row justify-content-center">--}}
    {{--            <div class="col-md-8">--}}
    {{--                <div class="card">--}}
    {{--                    <div class="card-header">{{ __('Login') }}</div>--}}

    {{--                    <div class="card-body">--}}
    {{--    <form method="POST" action="{{ route('login') }}">--}}
    {{--        @csrf--}}

    {{--        <div class="form-group row">--}}
    {{--            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

    {{--            <div class="col-md-6">--}}
    {{--                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"--}}
    {{--                       value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

    {{--                @error('email')--}}
    {{--                <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                @enderror--}}
    {{--            </div>--}}
    {{--        </div>--}}

    {{--        <div class="form-group row">--}}
    {{--            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

    {{--            <div class="col-md-6">--}}
    {{--                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"--}}
    {{--                       name="password" required autocomplete="current-password">--}}

    {{--                @error('password')--}}
    {{--                <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                @enderror--}}
    {{--            </div>--}}
    {{--        </div>--}}

    {{--                            <div class="form-group row">--}}
    {{--                                <div class="col-md-6 offset-md-4">--}}
    {{--                                    <div class="form-check">--}}
    {{--                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
    {{--                                        <label class="form-check-label" for="remember">--}}
    {{--                                            {{ __('Remember Me') }}--}}
    {{--                                        </label>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="form-group row mb-0">--}}
    {{--                                <div class="col-md-8 offset-md-4">--}}
    {{--                                    <button type="submit" class="btn btn-primary">--}}
    {{--                                        {{ __('Login') }}--}}
    {{--                                    </button>--}}

    {{--                                    @if (Route::has('password.request'))--}}
    {{--                                        <a class="btn btn-link" href="{{ route('password.request') }}">--}}
    {{--                                            {{ __('Forgot Your Password?') }}--}}
    {{--                                        </a>--}}
    {{--                                    @endif--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </form>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Tracking Order</h2>
                            <p>Home <span>-</span> Tracking Order</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    <!--================login_part Area =================-->
    <section class="login_part padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>New to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href="#" class="btn_3">Create an Account</a>
                        </div>
                    </div>
                </div>
                @if (Session::has('errors'))
                    @foreach(Session::get('errors') as $error)
                        <div class="alert"> {{$error}}</div>
                    @endforeach
                @endif
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back ! <br>
                                Please Sign in now</h3>
                            <form class="row contact_form" method="POST" action="{{ route('login') }}"
                                  novalidate="novalidate">
                                @csrf
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="email" @error('email') is-invalid
                                           @enderror name="email" value="{{ old('email') }}" placeholder="Email">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password"
                                           @error('password') is-invalid @enderror
                                           name="password" required autocomplete="current-password"
                                           placeholder="Password">
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" name="remember"
                                               id="f-option" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="f-option">{{ __('Remember Me') }}</label>
                                    </div>
                                    <button type="submit" class="btn_3">
                                        {{ __('Login') }}
                                    </button>
                                    <a class="lost_pass" href="#">forget password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->
@endsection
