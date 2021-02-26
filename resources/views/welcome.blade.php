@extends('layouts.app')
@section('body-class','landing-page sidebar-collapse')
@section('title',''.config('app.name').'- Bienvenido')

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
{{--    @dd($products->count() > 9)--}}

    <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('/img/bg8.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title">Your Story Starts With Us.</h1>
                    <h4>Every landing page needs a small description after the big bold title, that's why we added this text here. Add here all the information that can make you or your product create the first impression.</h4>
                    <br />
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
                        <i class="fa fa-play"></i> Watch video
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">

        <div class="container">
            <div class="section text-center" id="centramesta">
                <div class="section text-center">
                    <h2 class="title">Categorias</h2>

                    <form action="post">
                        <input type="text" placeholder="Producto a buscar">
                        <button type="submit" class="btn btn-primary btn-fab btn-fab-mini btn-round">
                            <i class="material-icons">search</i>
                        </button>
                    </form>
                </div>

                <div class="team">
                    <div class="row">
                        @foreach($categories as $category)
                            <div class="col-md-4">
                                <div class="card card-blog">
                                    <div class="card-image">
                                        <a href="{{ url('/products/'.$category->id) }}">
                                            <img class="img" src="{{ $category->featured_image_url }}" />
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <h6 class="category text-danger">
                                            <a href="{{ url('/categories/'.$category->id) }}"><i class="material-icons">trending_up</i> {{ $category->name }}</a>
                                        </h6>
                                        <h4 class="card-title">
                                            <a href="{{ url('/products/'.$category->id) }}">{{ $category->description }}</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </div>

    @include('includes.footer')
@endsection
