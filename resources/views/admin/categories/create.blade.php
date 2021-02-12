@extends('layouts.app')
@section('body-class','profile-page sidebar-collapse')
@section('title','Crear')
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
                <form method="post" action="{{ url('/admin/categories/') }}">
                    {{csrf_field()}}

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Nombre</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Descripcion</label>
                        <input type="text" class="form-control" name="description" value="{{ old('description') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url()->previous()}}" class="btn btn-default">Cancel</a>

                </form>
            </div>
        </div>
    </div>
@include('includes.footer')
@endsection
