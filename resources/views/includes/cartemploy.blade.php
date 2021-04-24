<div class="page-header header-filter" data-parallax="false" style="background-image: url('{{asset('img/profile_city.jpg')}}')">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <h1 class="title">Bienvenido {{ Auth::user()->name }}!</h1>
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
                                        <a href="#mesa-libre" role="tab" data-toggle="tab"><i class="material-icons">local_cafe</i>Mesas Libres</a>
                                    </li>
                                    {{--<li class="active">
                                        <a href="#dashboard-2" role="tab" data-toggle="tab">
                                            <i class="material-icons">dashboard</i>
                                            Carrito
                                        </a>
                                    </li>--}}
                                    <li >
                                        <a href="#mesa-ocupada" role="tab" data-toggle="tab">
                                            <i class="material-icons">block</i>
                                            Schedule
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content">
                                    {{--<div class="tab-pane active" id="dashboard-2">
                                        <div class="table-full-width">
                                        @if(auth()->user()->cart->details->count() < 1)
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
                                                                                                                                        <br /><small>by Dolce&Gabbana</small>
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
                                            @if(auth()->user()->cart->details->count() > 0)
                                                <div class="text-right">
                                                    <form action=" {{ url('/order') }}" method="post">
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-primary btn-round">
                                                            Realizar Pedido   <i class="material-icons">send</i>
                                                        </button>
                                                    </form>
                                                </div>
                                            @endif
                                        </div>
                                            @endif
                                        </div>
                                                                                </div>--}}
                                    <div class="tab-pane" id="mesa-ocupada">
                                        <div class="team">
                                            <div class="row">
                                                @if($status === 0)
                                                    <h4 class="title">No Hay Mesas Ocupadas</h4>
                                                @else
                                                    <h4 class="title">Mesas Ocupadas</h4>
                                                    @foreach($boards as $board)
                                                        @if($board->status_id === 2)
                                                            <div class="col-md-4">
                                                                <div class="card card-blog">
                                                                    <div class="card-content">
                                                                        <h6 class="category text-danger">
                                                                            {{ $board->num_board }}
                                                                        </h6>
                                                                        <h4 class="card-title">
                                                                            {{ $board->place }}
                                                                        </h4>

                                                                        <a href="{{ url('/admin/command/'.$board->id.'/order') }}" class="btn btn-primary btn-round"><i class="material-icons">visibility</i>
                                                                            <div class="ripple-container"></div></a>
                                                                        <a href="{{ url('/admin/command/'.$board->id) }}" class="btn btn-primary btn-round"><i class="material-icons">update</i>
                                                                            <div class="ripple-container"></div></a>
                                                                        <a href="{{ url('/admin/command/'.$board->id) }}" class="btn btn-primary btn-round"><i class="material-icons">price_check</i>
                                                                            <div class="ripple-container"></div></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane active" id="mesa-libre">
                                        <h4 class="title">Mesas Libres</h4>
                                        <div class="team">
                                            <div class="row">
                                                @foreach($boards as $board)
                                                    @if($board->status_id === 1)
                                                    <div class="col-md-4">
                                                        <div class="card card-blog">
                                                            <div class="card-content">
                                                                <h6 class="category text-danger">
                                                                    {{ $board->num_board }}
                                                                </h6>
                                                                <h4 class="card-title">
                                                                    {{ $board->place }}
                                                                </h4>

                                                                <a href="{{ url('/admin/command/'.$board->id) }}" class="btn btn-primary btn-round"><i class="material-icons">add</i>
                                                                    <div class="ripple-container"></div></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                @endforeach
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
</div>
