@extends('adminlte::master')

@section('adminlte_css_pre')
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <style>
        .login-bg{
            background-image: url(https://images.adsttc.com/media/images/5540/4983/e58e/ce70/6c00/01a6/large_jpg/Freemens_sch-4911.jpg?1430276469);
            background-color: #ED4E20;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .login-header{
            height: 100px;
            line-height: 100px;
        }

        .register-span-padding{
            padding-left: 12rem;
             color: rgba(0,0,0,.26);
        }

        .resister-p-style{
            font-weight: 500;
            color: #ee4d2d;
        }

        ._2-24Qg {
            padding: 1.5rem 0;
            display: flex;
            align-items: center;
        }

        ._2rsCYx {
            border: .03125rem solid #dbdbdb;
            flex: 1;
            display: block;
        }

        ._3otgpL {
            color: #ccc;
            padding: 0 1rem;
            text-transform: uppercase;
        }

        .btnLoginSocialite{
            display: inline-block;
            border-radius: 3px;
            background-color: #2C83F3;
            height: 40px;
            width: 150px;
            line-height: 40px;
            color: white;
        }
    </style>
@stop

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body', 'login-page')

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
@php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset') )
@php( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ?     route($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
    @php( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
    @php( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' )
@endif

@section('body')
        <div class="row login-header" style="width: 100%">
            <div class="col-1 offset-1">
                <img src="https://www.wingara.com.au/assets/client/Image/LaLaLand/Allbottleshotsandlogos/Highres/LaLaLandBlack.jpg" alf="LA LA LAND" height="90px" width="100%">
            </div>
            <div class="col-3">
                <p style="font-size: 2rem">Đăng nhập</p>
            </div>
            <a class=" col-1 offset-5" style="color: #ee4d2d; font-size: 1.125rem; margin-right: .9375rem;">
                Cần trợ giúp?
            </a>
        </div>
    <div class="login-box login-bg" style="width: 99.99%; height: 800px">
        <!-- <div class="login-logo">
            <a href="{{ $dashboard_url }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
        </div> -->
        <div class="row">
            <div class="col-6">

            </div>
            <div class="col-4">
                <div class="card" style="min-width: 600px; height: 400px; margin-top: 200px">
                    <div class="card-header" style="display: flex; justify-content: space-between">
                        <div>Đăng nhập</div>
                        <div>
                            <span class="register-span-padding">Bạn mới biết đến chúng tôi?</span>
                            @if ($register_url)
                                    <a class="resister-p-style" href="{{ $register_url }}">
                                        {{ __('adminlte::adminlte.register_a_new_membership') }}
                                    </a>
                            @endif
                        </div>
                    </div>
                    <div class="card-body login-card-body">
                        <!-- <p class="login-box-msg">{{ __('adminlte::adminlte.login_message') }}</p> -->
                        <form action="{{ $login_url }}" method="post">
                            {{ csrf_field() }}
                            <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="{{ __('adminlte::adminlte.password') }}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                @if ($errors->has('password'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn   btn-block btn-flat" style="background-color: #ee4d2d; color: white">
                                        {{ __('adminlte::adminlte.sign_in') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        @if ($password_reset_url)
                            <p class="mt-2 mb-1">
                                <a href="{{ $password_reset_url }}">
                                    {{ __('adminlte::adminlte.i_forgot_my_password') }}
                                </a>
                            </p>
                        @endif
                        <div>
                            <div class="_2-24Qg">
                                <div class="_2rsCYx"></div>
                                <span class="_3otgpL">HOẶC</span>
                                <div class="_2rsCYx"></div>
                            </div>
                            <div class="row" style="text-align: center">
                                <div class="col-6">
                                    <a href="{{route('loginGoogle')}}" class="btnLoginSocialite">
                                        Google
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="{{route('loginFacebook')}}" class="btnLoginSocialite">
                                        Facebook
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    @stack('js')
    @yield('js')
@stop
