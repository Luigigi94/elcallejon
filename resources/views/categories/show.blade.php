@extends('layouts.app')
@section('body-class','profile-page')
@section('title',''.config('app.name').'- '.$category->name)
@section('content')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('/img/examples/city.jpg') }}');"></div>

    <div class="container">
        @if(session('notification'))
            <div class="alert alert-success">
                <div class="container">
                    <div class="alert-icon">
                        <i class="material-icons">check</i>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                    </button>
                    <b>Success Alert: </b>{{ session('notification') }}
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="profile">
                    <div class="avatar">
                        <img src="{{ $category->featured_image_url }}" alt="Circle Image" class="img-circle img-responsive img-raised">
                    </div>
                    <div class="name">
                        <h3 class="title">{{ $category->name }}</h3>
{{--                        <h6>{{ $product->category->name }}</h6>--}}
                    </div>
                </div>
            </div>
        </div>


        <div class="description text-center">
{{--            <p>{{ $product->long_description }}</p>--}}
{{--            <p> ${{ $product->price }}</p>--}}
        </div>

            <div class="team">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-4">
                            <div class="card card-blog">
                                <div class="card-image" style="height: 255px">
                                    <a href="{{ url('/products/'.$product->id) }}">
                                        <img class="img" src="{{ $product->featured_image_url }}" height="255" width="255">
                                        <div class="card-title">
                                            <a href="{{ url('/products/'.$product->id) }}" id="elhref"> {{ $product->name }}</a>
                                        </div>
                                    </a>
                                    <div class="colored-shadow" style="background-image: url({{$product->featured_image_url}}); opacity: 1; width: 120px; height: 120px"></div>
                                </div>
                                <div class="card-content">
                                    <h6 class="category text-info">{{ $product->category->name }}</h6>
                                    <p class="card-description">
                                        {{ $product->long_description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center">
                    @if($products->count() > 9)
                        {{ $products->links() }}
                    @endif
                </div>
            </div>
{{--        @include('includes.clasicmodal')--}}
    </div>

    @include('includes.footer')
@endsection
