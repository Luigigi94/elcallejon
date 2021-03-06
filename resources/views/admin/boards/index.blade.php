@extends('layouts.app')
@section('body-class','pricing')
@section('title','Mesas (Admin)')
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

    @include('includes.board.modaladdboard')
{{--    @include('includes.board.modaledit')--}}
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('{{asset('/img/bg2.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="title">Administración de las Mesas</h1>
                    <h4>Aqui puedes ver, editar y modificar lo relacionado a las mesas</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="container">
            <div class="pricing-2">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center" id="eldiv">
                        <button class="btn btn-raised btn-round btn-default btn-block" data-toggle="modal" data-target="#modalAddBoard">
                            <i class="material-icons">add</i>
                            Agregar
                        </button>
                    </div>
                </div>
                <div class="row" id="elrow">
                    @foreach($board as $bor)
                        @if(($bor->id)%2 )
                            <div class="col-md-6">
                                <div class="card card-pricing card-plain">
                                    <div class="card-content">
                                        <h6 class="category text-info"></h6>
                                        <h1 class="card-title">{{$bor->num_board}}</h1>
                                        <ul>
                                            <li>{{ $bor->place }}</li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-md-3 col-md-offset-2">
                                                <a href='{{ url('/admin/boards/'.$bor->id.'/edit') }}' class="btn btn-rose btn-raised btn-round">
                                                    Editar Mesa
                                                </a>
                                            </div>
                                            <div class="col-md-3 col-md-offset-1">
                                                <form method="post" action="{{ url('admin/boards/'.$bor->id) }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-rose btn-raised btn-round" type="submit">
                                                        Eiminar mesa
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                        <div class="col-md-6">
                            <div class="card card-pricing card-plain">
                                <div class="card-content content-rose">
                                    <h6 class="category text-info"></h6>
                                    <h1 class="card-title">{{$bor->num_board}}</h1>
                                    <ul>
                                        <li>{{ $bor->place }}</li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-md-3 col-md-offset-2">
                                            <a href='{{ url('/admin/boards/'.$bor->id.'/edit') }}' class="btn btn-white btn-raised btn-round">
                                        Editar Mesa
                                    </a>
                                        </div>
                                        <div class="col-md-3 col-md-offset-1">
                                            <form method="post" action="{{ url('admin/boards/'.$bor->id) }}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-white btn-raised btn-round" type="submit">
                                                    Eiminar mesa
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
                {{$board->links()}}
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection
