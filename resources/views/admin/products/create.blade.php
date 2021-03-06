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
                <form method="post" action="{{ url('/admin/products/') }}">
                    {{csrf_field()}}

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Nombre</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div></div>
                        <div class="col-sm-4">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Precio del Producto</label>
                                <input type="number" class="form-control" name="price" step=".01" value="{{ old('price') }}">
                            </div>
                        </div>
{{--                        @dd($products['category_id'])--}}
                        <div class="col-sm-4">
                            <div class="form-group bmd-form-group">
                                <select class="selectpicker" data-style="btn btn-primary btn-round" title="Categorias" name="category_id">
                                    <option disabled selected>Elige Categoria</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}" name='category_id'>{{ $category->id }}{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Descripcion</label>
                        <input type="text" class="form-control" name="description" value="{{ old('description') }}">
                    </div>
                    <textarea class="form-control" placeholder="Escribe aqui la descripción" rows="5"name="long_description" value="{{ old('long_description') }}"></textarea>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url()->previous()}}" class="btn btn-default">Cancel</a>

                </form>
            </div>
        </div>
    </div>
@include('includes.footer')
@endsection
