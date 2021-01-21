@extends('layouts.app')
@section('body-class','login-page sidebar-collapse')
@section('content')
<div class="page-header header-filter" style="background-image: url('{{asset('/img/bg7.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                <div class="card card-login">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">Inicio de Sesión</h4>
{{--                            <div class="social-line">--}}
{{--                                <a href="#pablo" class="btn btn-just-icon btn-link">--}}
{{--                                    <i class="fa fa-facebook-square"></i>--}}
{{--                                </a>--}}
{{--                                <a href="#pablo" class="btn btn-just-icon btn-link">--}}
{{--                                    <i class="fa fa-twitter"></i>--}}
{{--                                </a>--}}
{{--                                <a href="#pablo" class="btn btn-just-icon btn-link">--}}
{{--                                    <i class="fa fa-google-plus"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
                            <div></div>
                        </div>
                        <p class="description text-center">Ingresa tus Credenciales</p>
                        <div class="card-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="material-icons">mail</i>
            </span>
                                </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('') }}" required autocomplete="email" autofocus placeholder="Email...">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="material-icons">lock_outline</i>
            </span>
                                </div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password...">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Iniciar Sesión</button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
                <div class="container">
                    <nav class="float-left">
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com/">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/presentation">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/blog">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/license">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, gorda, ya vete a dormir <i class="material-icons">favorite</i> by
                        <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.
                    </div>
                </div>
            </footer>
</div>
@endsection
