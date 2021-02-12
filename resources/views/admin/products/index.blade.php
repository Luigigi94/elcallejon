@extends('layouts.app')
@section('body-class','pricing')
@section('title',config('app.name').'- Listado de Productos')
@section('stylesxd')
    <style>
        .team .row .col-md-6{
            margin-bottom: 1em;
        }
        .row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display:         flex;
            flex-wrap: wrap;
        }
        .row > [class*='col-'] {
            display: flex;
            flex-direction: column;
        }

        #elhref{
            color: #fff;
            text-align: center;
        }
    </style>
@endsection
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
                        <div class="col-md-4 col-md-offset-3 text-center">
                            <ul class="nav nav-pills nav-pills-rose" role="tablist" >
                                <li class="active">
                                    <a href="{{ url('/admin/products/create') }}">
                                        <i class="material-icons">add</i>
                                        Crear nuevo producto
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($products as $key => $product)
                            @if($key % 2)
{{--                                @dd($product->category->name)--}}
                                <div class="col-md-6">
                                    <div class="card card-pricing card-plain flex-fill">
                                        <div class="card-content">
                                            <h6 class="category text-info">{{ $product->id }}</h6>
                                            <h1 class="card-title">{{$product->name}}</h1>
                                            <ul>
                                                <li><b>{{ $product->description }}</b></li>
                                                <li><b>{{ $product->price }}</b></li>

                                                <li><b>{{ $product->category_name }}</b></li>
                                                <li><b><a href="{{url('/admin/products/'.$product->id.'/images')}}">Editar imagen de presentacion</a></b></li>
                                            </ul>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href='{{ url('/admin/products/'.$product->id.'/edit') }}' class="btn btn-rose btn-raised btn-round">
                                                        Editar Producto
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <form method="post" action="{{ url('admin/products/'.$product->id) }}">
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
                                            <h6 class="category text-info">{{ $product->id }}</h6>
                                            <h1 class="card-title">{{$product->name}}</h1>
                                            <ul>
                                                <li><b>{{ $product->description }}</b></li>
                                                <li><b>{{ $product->price }}</b></li>
                                                <li><b>{{ $product->category_name }}</b></li>
                                                <li><b><a href="{{url('/admin/products/'.$product->id.'/images')}}">Editar imagen de presentacion</a></b></li>
                                            </ul>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href='{{ url('/admin/products/'.$product->id.'/edit') }}' class="btn btn-white btn-raised btn-round">
                                                        Editar Producto
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <form method="post" action="{{ url('admin/products/'.$product->id) }}">
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
{{--@foreach($images as $product)--}}
{{--    --}}{{--                            @dd($product)--}}
{{--    @if(($product->idprod)%2 )--}}
{{--        <div class="col-md-6">--}}
{{--            <div class="card card-pricing card-plain flex-fill">--}}
{{--                <div class="card-content">--}}
{{--                    <h6 class="category text-info">{{ $product->idprod }}</h6>--}}
{{--                    <h1 class="card-title">{{$product->prodname}}</h1>--}}
{{--                    <ul>--}}
{{--                        <li><b>{{ $product->descpro }}</b></li>--}}
{{--                        <li><b>{{ $product->priceprod }}</b></li>--}}

{{--                        <li><b>{{ $product->catename }}</b></li>--}}
{{--                        <li><b><a href="{{url('/admin/products/'.$product->idprod.'/images')}}">Editar imagen de presentacion</a></b></li>--}}
{{--                    </ul>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-6">--}}
{{--                            <a href='{{ url('/admin/products/'.$product->idprod.'/edit') }}' class="btn btn-rose btn-raised btn-round">--}}
{{--                                Editar Producto--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6">--}}
{{--                            <form method="post" action="{{ url('admin/products/'.$product->idprod) }}">--}}
{{--                                {{ csrf_field() }}--}}
{{--                                {{ method_field('DELETE') }}--}}
{{--                                <button class="btn btn-rose btn-raised btn-round" type="submit">--}}
{{--                                    Eiminar Prouducto--}}
{{--                                </button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @else--}}
{{--        <div class="col-md-6">--}}
{{--            <div class="card card-pricing card-plain flex-fill">--}}
{{--                <div class="card-content content-rose">--}}
{{--                    <h6 class="category text-info">{{ $product->idprod }}</h6>--}}
{{--                    <h1 class="card-title">{{$product->prodname}}</h1>--}}
{{--                    <ul>--}}
{{--                        <li><b>{{ $product->descpro }}</b></li>--}}
{{--                        <li><b>{{ $product->priceprod }}</b></li>--}}
{{--                        <li><b>{{ $product->catename }}</b></li>--}}
{{--                        <li><b><a href="{{url('/admin/products/'.$product->idprod.'/images')}}">Editar imagen de presentacion</a></b></li>--}}
{{--                    </ul>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-6">--}}
{{--                            <a href='{{ url('/admin/products/'.$product->idprod.'/edit') }}' class="btn btn-white btn-raised btn-round">--}}
{{--                                Editar Producto--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6">--}}
{{--                            <form method="post" action="{{ url('admin/products/'.$product->idprod) }}">--}}
{{--                                {{ csrf_field() }}--}}
{{--                                {{ method_field('DELETE') }}--}}
{{--                                <button class="btn btn-white btn-raised btn-round" type="submit">--}}
{{--                                    Eiminar Producto--}}
{{--                                </button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}
{{--@endforeach--}}
