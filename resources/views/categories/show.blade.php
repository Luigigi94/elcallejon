@extends('layouts.app')
@section('body-class','profile-page')
@section('title',''.config('app.name').'- '.$category->name)
<style>
    .team .row .col-md-4{
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

</style>
@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('/img/examples/city.jpg') }}');">

</div>
<div class="main main-raised">
    <div class="profile-content">
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
                    </div>
                </div>
            </div>

            <div class="team">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-4">
                            <div class="card card-blog">
                                <div class="card-image">
                                    <a href="{{ url('/products/'.$product->id) }}">
                                        <img class="img" src="{{ $product->featured_image_url }}" />
                                    </a>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="{{ url('/products/'.$product->id) }}">{{ $product->description }}</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center">
                    @if($products->count() > 9)
{{--                        {{ $products->links() }}--}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
@endsection
