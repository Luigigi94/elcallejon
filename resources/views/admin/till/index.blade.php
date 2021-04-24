@extends('layouts.app')
@section('body-class','product-page')
@section('title','Caja Registradora')
@section('content')

    <div class="features-5" style="background-image: url('{{asset('/img/bg9.jpg')}}')">

        <div class="col-md-8 col-md-offset-2 text-center">
            <h2 class="title">Your life will be much easier</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="info">
                        <div class="icon">
                            <i class="material-icons">trending_up</i>
                        </div>
                        <h4 class="info-title">Dejar en Caja</h4>
                        <div>
                            <button class="btn btn-raised btn-round btn-default btn-block" data-toggle="modal" data-target="#add_to_till">
                                <i class="material-icons">info_outline</i>
                                Dejar en Caja
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="info">
                        <div class="icon">
                            <i class="material-icons">money</i>
                        </div>
                        <h4 class="info-title">Cantidad en Caja <br>
                            {{$till->total}}
                        </h4>
{{--                        @dd($till->total)--}}
                        {{--@foreach($till as $cash)
                        <h4 class="info-title">${{$cash->total}}</h4>
                        @endforeach--}}

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="info">
                        <div class="icon">
                            <i class="material-icons">dashboard</i>
                        </div>
                        <h4 class="info-title">Bootstrap Grid</h4>
                        <p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    @include('includes.Tills.modal_add_to_till')
    @include('includes.footer')
@endsection


