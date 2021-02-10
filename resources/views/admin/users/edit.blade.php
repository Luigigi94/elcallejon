@extends('layouts.app')
@section('body-class','profile-page')
@section('title','Editar Usuario: '.$userio->name)
@section('content')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/profile_city.jpg')}}')">
    </div>
    <div class="main main-raised">
        <div class="container">
            <div class="section">
                <h2 class="title text-center">Registrar</h2>

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $errors)
                                <li>{{ $errors }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ url('/admin/users/'.$userio->id.'/edit') }}">
                    {{csrf_field()}}

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Nombre</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name',$userio->name) }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Email</label>
                                <input type="text" class="form-control" name="email" value="{{ old('email',$userio->email) }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Contraseña</label>
                                <input type="password" class="form-control" name="password" value="{{ old('password',bcrypt($userio->password)) }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input type="text" name="admin" value="2" style="visibility: hidden">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{url()->previous()}}" class="btn btn-default">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection
