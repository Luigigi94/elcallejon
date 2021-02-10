@extends('layouts.app')
@section('body-class','pricing')
@section('title',config('app.name').'- Listado de Imagenes de Productos')
@section('content')
    <!--el estilo chidoliro-->
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('{{asset('/img/bg2.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="title">Administración de las Imagenes de los Productos</h1>
                    <h4>Aqui puedes ver, editar y modificar lo relacionado a las imagenes de los productos</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="row">
            <div class="col-md-6 col-md-offset-4">
                <div class="tim-typo">
                    <h2>
                        Agregar o Eliminar imágenes <br>
                        <small>en el producto {{ $product->name }}</small>
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pricing-2">
                <form action="" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group form-file-upload">
                                <input type="file" id="inputFile2" multiple="" name="photo">
                                <div class="input-group">
                                    <input type="text" readonly="" class="form-control" placeholder="Seleccionar Archivo" required>
                                    <span class="input-group-btn input-group-s">
										<button type="button" class="btn btn-just-icon btn-round btn-primary">
											<i class="material-icons">attach_file</i>
										</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group form-file-upload">
                                <div class="input-group">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="material-icons">done</i> Cargar Imagen
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <div class="form-group form-file-upload">
                                    <a href="{{url('/admin/products')}}" class="btn btn-finish">Regresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="row">
                    @foreach($images as $imagenes)
                    <div class="col-md-4">
                        <div class="panel panel-info">
                            <div class="panel-body" align="center">
{{--                                @dd($imagenes->url)--}}
                                <img src={{ $imagenes->url }} alt="" width="250">
                                <div><h2>{{ $imagenes->id }}</h2></div>
                                <div>
                                    <form action="" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input type="hidden" name="image_id" value="{{ $imagenes->id }}">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="material-icons">delete</i> Eliminar Imagen
                                        </button>
                                        @if($imagenes->featured > 0)
                                            <button class="btn btn-info btn-fab btn-fab-mini btn-round" rel="tooltip" title="Esta es la imagen Favorita"><i class="material-icons">favorite</i></button>
                                        @else
                                            <a href="{{ url('/admin/products/'.$product->id.'/images/select/'.$imagenes->id) }}" class="btn btn-primary btn-fab btn-fab-mini btn-round"><i class="material-icons">favorite</i></a>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection

<div class="col-md-6 col-md-offset-3 text-center">
    <ul class="nav nav-pills nav-pills-rose" role="tablist" >
        <li class="active">

        </li>
        <li>
            <div class="form-group form-file-upload">
                <div class="input-group">
                </div>
            </div>
        </li>
    </ul>
</div>
