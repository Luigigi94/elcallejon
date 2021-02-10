@extends('layouts.app')
@section('body-class','profile-page')
@section('title','Editar Mesas')
@section('content')
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('{{asset('/img/bg2.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="title">Administración de las Mesas</h1>
                    <h4>Aqui puedes ver, editar y modificar lo relacionado a las mesas</h4>
                </div>
            </div>
        </div>
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
                <form method="post" action="{{ url('/admin/boards/') }}">
                    {{csrf_field()}}

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Numero de Mesa</label>
                                <input type="Number" class="form-control" name="num_board" value="{{ old('num_board',$board->num_board) }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Lugar</label>
                                <input type="text" class="form-control" name="place" value="{{ old('place',$board->place) }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
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
