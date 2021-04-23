@extends('layouts.app')
@section('body-class','product-page')
@section('title','Ticket de la mesa: '.$id)
@section('content')

    <div class="page-header header-filter" data-parallax="true" filter-color="rose" style="background-image: url('{{asset('/img/bg6.jpg')}}');">
        <div class="container">
            <div class="row title-row">
                <div class="col-md-4 col-md-offset-8">
                    <a href="{{ url('/admin/command/'.$id) }}" class="btn btn-white pull-right"><i class="material-icons">shopping_cart</i> 0 Items</a>
                </div>

            </div>
        </div>
    </div>
    <div class="section section-gray">
        <div class="container">
            <div class="main main-raised main-product">
                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')
@endsection
