<div class="page-header header-filter" data-parallax="false" style="background-image: url('{{asset('img/profile_city.jpg')}}')">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <h1 class="title">Bienvenido {{ Auth::user()->name }}!</h1>
                <h4 class="title">Paginas que has visitado: </h4>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised" data-parallax="true" style="background-image: url('{{asset('img/logito2.png')}}'); background-size:contain;">
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
            <div class="card">
                <div class="card-content">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="nav nav-pills nav-pills-icons nav-stacked" role="tablist">
                                    <!--
                                        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                    -->
                                    <li class="active">
                                        <a href="#dashboard-2" role="tab" data-toggle="tab">
                                            <i class="material-icons">dashboard</i>
                                            Carrito
                                        </a>
                                    </li>
                                    <li >
                                        <a href="#schedule-2" role="tab" data-toggle="tab">
                                            <i class="material-icons">schedule</i>
                                            Schedule
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="dashboard-2">
                                        <div class="table-full-width">
                                            {{--                                                        @dd(auth()->user()->cart)--}}
                                            @if(empty(auth()->user()->cart->details))
                                                <div id="typography" class="cd-section">
                                                    <div class="tim-typo">
                                                        <h2 class="title">Agrega algun producto a tu carrito</h2>
                                                    </div>
                                                </div>
                                            @else
                                                <div>
                                                    <table class="table table-shopping">
                                                        <thead>
                                                        <tr>
                                                            <th class="text-center"></th>
                                                            <th>Producto</th>
                                                            <th class="text-center">Precio</th>
                                                            <th class="text-center">Cantidad</th>
                                                            <th class="text-center">Total</th>
                                                            <th>Opciones</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach(auth()->user()->cart->details as $detail)
                                                            <tr>
                                                                <td>
                                                                    <div class="img-container">
                                                                        <img src="{{ $detail->product->featured_image_url }}" alt="..." height="250" width="250">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="{{ url('/products/'.$detail->product->id) }}">{{ $detail->product->name }}</a>
                                                                    {{--                                                                            <br /><small>by Dolce&Gabbana</small>--}}
                                                                </td>
                                                                <td class="td-number">
                                                                    <small>&euro;</small>{{ $detail->product->price }}
                                                                </td>
                                                                <td class="td-number text-center">
                                                                    @if( $detail->quantity >1)
                                                                        {{ $detail->quantity }} piezas.
                                                                    @else
                                                                        {{ $detail->quantity }} pieza.
                                                                    @endif
                                                                </td>
                                                                <td class="td-number text-center">
                                                                    <small>&euro;</small>{{ ($detail->product->price)*($detail->quantity) }}
                                                                </td>
                                                                <td class="td-actions">
                                                                    <form action="{{ url('/cart') }}" method="post">
                                                                        {{ csrf_field() }}
                                                                        {{ method_field('DELETE') }}

                                                                        <input type="hidden" name="cart_detail_id" value=" {{ $detail->id }} ">
                                                                        <a href=" {{ url('/products/'.$detail->product->id) }}" target="_blank" rel="tooltip" data-placement="left" title="Mirar item">
                                                                            <i class="material-icons">panorama</i>
                                                                        </a>
                                                                        <button type="submit" rel="tooltip" data-placement="right" title="Quitar item" class="btn btn-simple">
                                                                            <i class="material-icons">close</i>
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>

                                                    <div class="text-right">
                                                        <form action=" {{ url('/order') }}" method="post">
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-primary btn-round">
                                                                Realizar Pedido   <i class="material-icons">send</i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="schedule-2">

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


{{--                <div class="section text-center">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-8 col-md-offset-2 text-center" style="background: #1d643b; ">--}}
{{--                            <h2 class="title">The Executive Team 2</h2>--}}
{{--                            <h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>--}}
{{--                            <h2 class="title" style="visibility: hidden">The Executive Team 2</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div style="visibility: hidden" class="row">--}}
{{--                        <div class="col-md-8 col-md-offset-2 text-center">--}}
{{--                            <h2 class="title">The Executive Team 2</h2>--}}
{{--                            <h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-4">--}}
{{--                            <div class="rotating-card-container">--}}
{{--                                <div class="card card-rotate card-background">--}}
{{--                                    <div class="front front-background" style="background-image: url('{{asset('img/examples/card-blog5.jpg')}}');">--}}
{{--                                        <div class="card-content">--}}
{{--                                            <h6 class="category text-info">Tarjeta de usuarios</h6>--}}
{{--                                            <a href="#something">--}}
{{--                                                <h3 class="card-title">Aqui puedes revisar la informacion de los usuarios</h3>--}}
{{--                                            </a>--}}
{{--                                            <p class="card-description">--}}
{{--                                                Todo lo relacionado con tus empleados lo puedes revisar al dar click en el icono de atras. Solo pasa el mouse por encima--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="back back-background" style="background-image: url('{{asset('img/examples/card-blog5.jpg')}}');">--}}
{{--                                        <div class="card-content">--}}
{{--                                            <h5 class="card-title">--}}
{{--                                                Administrar usuarios--}}
{{--                                            </h5>--}}
{{--                                            <p class="card-description">Como administrador te interesa saber quien puede tener acceso a tu aplicación, administralo desde aqui.</p>--}}
{{--                                            <div class="footer text-center">--}}
{{--                                                <a href="{{url('/admin/users')}}" class="btn btn-info btn-just-icon btn-fill btn-round">--}}
{{--                                                    <i class="material-icons">account_circle</i>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 col-md-offset-4">--}}
{{--                            <div class="rotating-card-container">--}}
{{--                                <div class="card card-rotate card-background">--}}
{{--                                    <div class="front front-background" style="background-image: url('{{asset('img/examples/card-blog5.jpg')}}');">--}}
{{--                                        <div class="card-content">--}}
{{--                                            <h6 class="category text-info">Tarjeta de Restaurant</h6>--}}
{{--                                            <a href="#pablo">--}}
{{--                                                <h3 class="card-title">Aqui puedes revisar la informacion de tu restaurant</h3>--}}
{{--                                            </a>--}}
{{--                                            <p class="card-description">--}}
{{--                                                Todo lo relacionado con tus restaurant (caja, mesas, cierres y etc. lo puedes revisar al dar click en el icono de atras. Solo pasa el mouse por encima--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="back back-background" style="background-image: url('{{asset('img/examples/card-blog5.jpg')}}');">--}}
{{--                                        <div class="card-content">--}}
{{--                                            <h5 class="card-title">--}}
{{--                                                Administrar Restaurant--}}
{{--                                            </h5>--}}
{{--                                            <p class="card-description">Como administrador te interesa saber quien puede tener acceso a tu aplicación, administralo desde aqui.</p>--}}
{{--                                            <div class="footer">--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-4">--}}
{{--                                                        <a href="{{ url('/admin/savings') }}" class="btn btn-info btn-just-icon btn-fill btn-round">--}}
{{--                                                            <i class="material-icons">attach_money</i>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-4">--}}
{{--                                                        <a href="{{ url('/admin/boards') }}" class="btn btn-info btn-just-icon btn-fill btn-round">--}}
{{--                                                            <i class="material-icons">coffee</i>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-4">--}}
{{--                                                        <a href="{{ url('/admin/till') }}" class="btn btn-info btn-just-icon btn-fill btn-round">--}}
{{--                                                            <i class="material-icons">local_grocery_store</i>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
