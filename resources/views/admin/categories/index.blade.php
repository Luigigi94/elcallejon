@extends('layouts.app')
@section('body-class','pricing')
@section('title',config('app.name').'- Listado de Categorias')
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
            color: #4a148c;
            text-align: center;
        }

        #lahref{
            color: #9368e9;
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
                        <h1 class="title">Administración de las Categorias</h1>
                        <h4>Aqui puedes ver, editar y modificar lo relacionado a las Categorias</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="main main-raised">
            <div class="container">
                <div class="pricing-2">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="nav nav-pills nav-pills-rose nav-align-center" role="tablist">
                                <li class="active">
                                    <a href="{{ url('/admin/categories/create') }}">
                                        <i class="material-icons">add</i>
                                        Crear nueva Categoria
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($categories as $key => $category)
{{--                            @dd($product)--}}
                            @if(($key)%2 )
                                <div class="col-md-6">
                                    <div class="card card-pricing card-plain flex-fill">
                                        <div class="card-content content-rose">
                                            <h6 class="category text-info">{{ $category->id }}</h6>
                                            <h1 class="card-title">{{$category->name}}</h1>
                                            <ul>
                                                <li><b>{{ $category->description }}</b></li>
                                                <li><b>{{ $category->priceprod }}</b></li>
                                            </ul>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href='{{ url('/admin/categories/'.$category->id.'/edit') }}' class="btn btn-white btn-raised btn-round">
                                                        Editar Categoria
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <form method="post" action="{{ url('admin/categories/'.$category->id) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button class="btn btn-white btn-raised btn-round" type="submit">
                                                            Eiminar Categoria
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
                                        <div class="card-content">
                                            <h6 class="category text-info">{{ $category->id }}</h6>
                                            <h1 class="card-title">{{$category->name}}</h1>
                                            <ul>
                                                <li><b>{{ $category->description }}</b></li>
                                                <li><b>{{ $category->priceprod }}</b></li>
                                            </ul>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href='{{ url('/admin/categories/'.$category->id.'/edit') }}' class="btn btn-rose btn-raised btn-round">
                                                        Editar Categoria
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <form method="post" action="{{ url('admin/categories/'.$category->id) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button class="btn btn-rose btn-raised btn-round" type="submit">
                                                            Eiminar Categoria
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
                    {{$categories->links()}}
                </div>
            </div>
        </div>
@include('includes.footer')
@endsection

