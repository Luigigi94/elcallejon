@extends('layouts.app')
@section('body-class','profile-page')
@section('title','Editar')
@section('content')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/profile_city.jpg')}}')">
    </div>
    <div class="main main-raised">
        <div class="container">
            <div class="section">
                <h2 class="title text-center">Editar {{ $product->name }}</h2>

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $errors)
                                <li>{{ $errors }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="{{ url('/admin/products/'.$product->id.'/edit') }}">
                    {{csrf_field()}}

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Nombre</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name', $product->name) }}">
                            </div></div>
                        <div class="col-sm-6">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Precio del Producto</label>
                                <input type="number" class="form-control" name="price" value="{{ old('price',$product->price) }}" step=".01">
                            </div>
                        </div>
                    </div>
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Descripcion</label>
                        <input type="text" class="form-control" name="description" value="{{ old('description',$product->description)}}">
                    </div>
                    <textarea class="form-control" placeholder="Escribe aqui la descripción" rows="5"name="long_description">{{ old('long_description',$product->long_description) }}</textarea>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{url()->previous()}}" class="btn btn-default">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@include('includes.footer')
@endsection

