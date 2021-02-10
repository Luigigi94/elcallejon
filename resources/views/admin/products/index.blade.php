@extends('layouts.app')
@section('body-class','pricing')
@section('title',config('app.name').'- Listado de Productos')
@section('content')
        <!--el estilo chidoliro-->
        <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('{{asset('/img/bg2.jpg')}}');">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="title">Administración de los Productos</h1>
                        <h4>Aqui puedes ver, editar y modificar lo relacionado a los productos</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="main main-raised">
            <div class="container">
                <div class="pricing-2">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <ul class="nav nav-pills nav-pills-rose" role="tablist" style="visibility: hidden">
                                <li class="active">
                                    <a href="#dashboard-1" role="tab" data-toggle="tab">
                                        Monthly
                                    </a>
                                </li>
                                <li>
                                    <a href="#schedule-1" role="tab" data-toggle="tab">
                                        Yearly
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($images as $product)
{{--                            @dd($product)--}}
                            @if(($product->idprod)%2 )
                                <div class="col-md-6">
                                    <div class="card card-pricing card-plain flex-fill">
                                        <div class="card-content">
                                            <h6 class="category text-info">{{ $product->idprod }}</h6>
                                            <h1 class="card-title">{{$product->prodname}}</h1>
                                            <ul>
                                                <li><b>{{ $product->descpro }}</b></li>
                                                <li><b>{{ $product->priceprod }}</b></li>

                                                <li><b>{{ $product->catename }}</b></li>
                                                <li><b><a href="{{url('/admin/products/'.$product->idprod.'/images')}}">Editar imagen de presentacion</a></b></li>
                                            </ul>
                                            <div class="row">
                                                <div class="col-md-3 col-md-offset-2">
                                                    <a href='{{ url('/admin/products/'.$product->idprod.'/edit') }}' class="btn btn-rose btn-raised btn-round">
                                                        Editar Producto
                                                    </a>
                                                </div>
                                                <div class="col-md-3 col-md-offset-1">
                                                    <form method="post" action="{{ url('admin/products/'.$product->idprod) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button class="btn btn-rose btn-raised btn-round" type="submit">
                                                            Eiminar Prouducto
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-md-6">
                                    <div class="card card-pricing card-plain flex-fill">
                                        <div class="card-content content-rose">
                                            <h6 class="category text-info">{{ $product->idprod }}</h6>
                                            <h1 class="card-title">{{$product->prodname}}</h1>
                                            <ul>
                                                <li><b>{{ $product->descpro }}</b></li>
                                                <li><b>{{ $product->priceprod }}</b></li>
                                                <li><b>{{ $product->catename }}</b></li>
                                                <li><b><a href="{{url('/admin/products/'.$product->idprod.'/images')}}">Editar imagen de presentacion</a></b></li>
                                            </ul>
                                            <div class="row">
                                                <div class="col-md-3 col-md-offset-2">
                                                    <a href='{{ url('/admin/products/'.$product->idprod.'/edit') }}' class="btn btn-white btn-raised btn-round">
                                                        Editar Producto
                                                    </a>
                                                </div>
                                                <div class="col-md-3 col-md-offset-1">
                                                    <form method="post" action="{{ url('admin/products/'.$product->idprod) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button class="btn btn-white btn-raised btn-round" type="submit">
                                                            Eiminar Producto
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    {{$products->links()}}
                </div>
            </div>
        </div>
@include('includes.footer')
@endsection

