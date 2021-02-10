@extends('layouts.app')
@section('body-class','pricing')
@section('title','Reserva de la Registradora (admin)')
@section('content')
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
            <div class="pricing-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-pricing card-plain">
                            <div class="card-content">
                                <h6 class="category">Startup</h6>
                                <h1 class="card-title"><small>$</small>0</h1>
                                <ul>
                                    <li><i class="material-icons text-success">check</i> Sharing Tools</li>
                                    <li><i class="material-icons text-danger">close</i> Design Tools</li>
                                    <li><i class="material-icons text-danger">close</i> Private Messages</li>
                                    <li><i class="material-icons text-danger">close</i> Personal Brand</li>
                                </ul>
                                <a href="#pablo" class="btn btn-danger btn-round">
                                    Downgrade Plan
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card card-pricing card-raised">
                            <div class="card-content content-success">
                                <h6 class="category">Small Company</h6>
                                <h1 class="card-title"><small>$</small>89</h1>
                                <ul>
                                    <li><i class="material-icons text-success">check</i> Sharing Tools</li>
                                    <li><i class="material-icons text-success">check</i> Design Tools</li>
                                    <li><i class="material-icons text-danger">close</i> Private Messages</li>
                                    <li><i class="material-icons text-danger">close</i> Personal Brand</li>
                                </ul>
                                <a href="#pablo" class="btn btn-white btn-raise disabled btn-round">
                                    Current Plan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection
