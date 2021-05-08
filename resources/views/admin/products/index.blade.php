@extends('layouts.app')
@section('body-class','pricing')
@section('title',config('app.name').'- Listado de Productos')
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


{{--    @dd($products)--}}
        <!--el estilo chidoliro-->
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
                <div class="pricing-2">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-3 text-center">
                            <ul class="nav nav-pills nav-pills-rose" role="tablist" >
                                <li class="active">
                                    <a href="{{ url('/admin/products/create') }}">
                                        <i class="material-icons">add</i>
                                        Crear nuevo producto
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        @include('includes.filterproducts')
                    </div>
                </div>
            </div>
        </div>
@include('includes.footer')
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function (){
            $("#ulmamalon").on('click','input.action_button', function (){
                // alert('abriste un producto')
                var id = $(this).data('id');
                alert('abriste el id: ')+id
                /*$.ajax({
                    url : '/admin/products/'+id+'/dataproduct',
                    dataType : "json",
                    success : function (html){
                        console.log(id)
                    }
                })*/
            })
        })
    </script>
@endsection
