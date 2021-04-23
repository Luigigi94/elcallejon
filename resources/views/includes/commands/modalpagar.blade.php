<div class="modal fade" id="modalpay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
                <h4 class="modal-title">Cuenta de la mesa {{$id}} </h4>
            </div>

            <form action="{{ url('/admin/payment/'.$id) }}" method="post">
                {{ csrf_field() }}

                <div class="modal-body">
                    <h2 class="title">
                        Total a pagar = @foreach($suma as $sum){{$sum->sum}} <input type="number" value="{{$sum->sum}}" name="total">@endforeach <br>
                    </h2>

                    <h2 class="card-subtitle">
                        Cantidad recibida = <input type="number">
                        <input type="text" value="{{$id}}" name="lamesa">
                    </h2>
                </div>

                <div class="modal-footer">
{{--                    <a href=" {{url('/admin/commando/pay')}} " type="submit" class="btn btn-simple">Pagar</a>--}}
                    <button type="submit" class="btn btn-simple">Pagar</button>
                    <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
