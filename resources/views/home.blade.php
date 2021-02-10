@if(auth()->user()->admin == 3)


@else

@extends('layouts.app')
@section('body-class','profile-page')
@section('title','Dashboard de '.auth()->user()->name)
@section('content')
    <div class="page-header header-filter" data-parallax="false" style="background-image: url('{{asset('img/profile_city.jpg')}}')">
        @if((auth()->user()->admin) == 2)

            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h1 class="title">Bienvenido {{ Auth::user()->name }}!</h1>
                        <h4 class="title">Paginas que has visitado: </h4>
                    </div>
                </div>
            </div>
        @else
            <div>Bendiciones</div>
        @endif
    </div>
    <div class="main main-raised" data-parallax="true" style="background-image: url('{{asset('img/logito2.png')}}');object-fit: cover">
        @if((auth()->user()->admin) == 2)
            <div class="container">
                <div class="section text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center" style="background: #1d643b; ">
                            <h2 class="title">The Executive Team 2</h2>
                            <h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>
                            <h2 class="title" style="visibility: hidden">The Executive Team 2</h2>
                        </div>
                    </div>
                    <div style="visibility: hidden" class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h2 class="title">The Executive Team 2</h2>
                            <h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="rotating-card-container">
                                <div class="card card-rotate card-background">
                                    <div class="front front-background" style="background-image: url('{{asset('img/examples/card-blog5.jpg')}}');">
                                        <div class="card-content">
                                            <h6 class="category text-info">Tarjeta de usuarios</h6>
                                            <a href="#something">
                                                <h3 class="card-title">Aqui puedes revisar la informacion de los usuarios</h3>
                                            </a>
                                            <p class="card-description">
                                                Todo lo relacionado con tus empleados lo puedes revisar al dar click en el icono de atras. Solo pasa el mouse por encima
                                            </p>
                                        </div>
                                    </div>

                                    <div class="back back-background" style="background-image: url('{{asset('img/examples/card-blog5.jpg')}}');">
                                        <div class="card-content">
                                            <h5 class="card-title">
                                                Administrar usuarios
                                            </h5>
                                            <p class="card-description">Como administrador te interesa saber quien puede tener acceso a tu aplicación, administralo desde aqui.</p>
                                            <div class="footer text-center">
                                                <a href="{{url('/admin/users')}}" class="btn btn-info btn-just-icon btn-fill btn-round">
                                                    <i class="material-icons">account_circle</i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-offset-4">
                            <div class="rotating-card-container">
                                <div class="card card-rotate card-background">
                                    <div class="front front-background" style="background-image: url('{{asset('img/examples/card-blog5.jpg')}}');">
                                        <div class="card-content">
                                            <h6 class="category text-info">Tarjeta de Restaurant</h6>
                                            <a href="#pablo">
                                                <h3 class="card-title">Aqui puedes revisar la informacion de tu restaurant</h3>
                                            </a>
                                            <p class="card-description">
                                                Todo lo relacionado con tus restaurant (caja, mesas, cierres y etc. lo puedes revisar al dar click en el icono de atras. Solo pasa el mouse por encima
                                            </p>
                                        </div>
                                    </div>

                                    <div class="back back-background" style="background-image: url('{{asset('img/examples/card-blog5.jpg')}}');">
                                        <div class="card-content">
                                            <h5 class="card-title">
                                                Administrar Restaurant
                                            </h5>
                                            <p class="card-description">Como administrador te interesa saber quien puede tener acceso a tu aplicación, administralo desde aqui.</p>
                                            <div class="footer">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <a href="{{ url('/admin/savings') }}" class="btn btn-info btn-just-icon btn-fill btn-round">
                                                            <i class="material-icons">attach_money</i>
                                                        </a>
                                                    </div>
                                                    <div class="col-4">
                                                        <a href="{{ url('/admin/boards') }}" class="btn btn-info btn-just-icon btn-fill btn-round">
                                                            <i class="material-icons">coffee</i>
                                                        </a>
                                                    </div>
                                                    <div class="col-4">
                                                        <a href="{{ url('/admin/till') }}" class="btn btn-info btn-just-icon btn-fill btn-round">
                                                            <i class="material-icons">local_grocery_store</i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div>Raza</div>
        @endif



    </div>
@include('includes.footer')
@endsection
@endif
