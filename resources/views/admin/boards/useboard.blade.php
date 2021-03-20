@extends('layouts.app')
@section('body-class','pricing')
@section('title','Mesas (Pedido)')
@section('content')
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('{{asset('/img/bg2.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="title">Administración de las Mesas</h1>
                    <h2 class="title">Agregar pedido a la mesa {{ $commandas }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="container">
            <div style="display: flex; margin-left: auto">
                <button class="btn btn-fab btn-primary" rel="tooltip" title="" data-original-title="Cerrar Comanda">
                    <i class="material-icons">close</i>
                    <div class="ripple-container"></div>
                </button>
            </div>
            <div class="pricing-2">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center" id="eldiv">
                    </div>
                </div>
                <div class="row" id="tag_container">
                    @include('includes.commands.commandindex')
                </div>
            </div>
        </div>
    </div>
    @include('includes.commands.modaladdtocommand')
    @include('includes.footer')
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function (){
            var urlactual = window.location
            const urle = new String (urlactual)
            var subbed = urle.substr(-1)

            // alert('Estas en: '+urlactual)
            $("#ulmamalon").on('click','input.action_button',function (){
                var id = $(this).data('id');
                $.ajax({
                    url : '/admin/command/'+id+'/dataproduct',
                    dataType : "json",
                    success : function (html){
                        $("#labelcambia").html('Cuantos de: '+html.data.name)
                        $("#nombreprod").val(html.data.name)
                        $("#product_id").val(html.data.id)
                        $("#price").val(html.data.price)
                        $('#formModal').modal('show');
                        // console.log(html)
                    }
                })
            })
        })
    </script>
@endsection
