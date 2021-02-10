@extends('layouts.app')
@section('body-class','login-page sidebar-collapse')
@section('content')
    <div class="page-header header-filter" style="background-image: url('{{asset('/img/bg01.png')}}'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                    <div class="card card-login">
                        <form class="form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title">Registro de Usuario</h4>
                                <div></div>
                            </div>
                            <p class="description text-center">Ingresa los Datos</p>
                            <div class="card-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="material-icons">face</i>
            </span>
                                    </div>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre...">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
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
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password...">

                                    @error('password')
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
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Password...">
                                </div>
                            </div>
                            <div class="footer text-center">
                                <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('includes.footer')
    </div>
@endsection
