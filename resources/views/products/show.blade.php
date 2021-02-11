@extends('layouts.app')
@section('body-class','profile-page')
@section('title',''.config('app.name').'- '.$product->name)
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
                        <img src="{{ $product->featured_image_url }}" alt="Circle Image" class="img-circle img-responsive img-raised">
                    </div>
                    <div class="name">
                        <h3 class="title">{{ $product->name }}</h3>
                        <h6>{{ $product->category->name }}</h6>
                    </div>
                </div>
            </div>
        </div>


        <div class="description text-center">
            <p>{{ $product->long_description }}</p>
            <p> ${{ $product->price }}</p>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="profile-tabs">
                    <div class="nav-align-center">
                        <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#ModalAddtoCart">
                            <i class="material-icons">add_shopping_cart</i> Agregar al carrito
                            <div class="ripple-container"></div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @include('includes.clasicmodal')
        <div class="tab-content">

            <div class="tab-pane active text-center gallery" id="media">
                <div class="row">
                    <div class="col-md-3 col-md-offset-3">
                        @foreach($imagesLeft as $images)
                            <img src="{{ $images->url }} " class="img-rounded" />
                        @endforeach
                    </div>
                    <div class="col-md-3">
                        @foreach($imagesRight as $images)
                            <img src="{{ $images->url }} " class="img-rounded" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')
@endsection
