<div class="modal fade" id="view_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notice">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                <h5 class="modal-title" id="myModalLabel">Cuanto se quedará en caja?</h5>
            </div>
{{--            <form action="{{ url('/admin/tills') }}" method="post">--}}
{{--                {{ csrf_field() }}--}}
                <div class="modal-body">
                    <div class="instruction">
                        <div class="row">
                            <div class="col-md-8">
                                <strong>Cantidad actual</strong>
{{--                                <br>{{$till->total}}--}}
                            </div>
                        </div>
                    </div>
                    <p>Cantidad a dejar</p>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group label-floating">
                                <label class="control-label">Cantidad en Caja</label>
                                <input type="text" class="form-control" name="total">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    {{--                    <button type="submit" class="btn btn-info btn-round" data-dismiss="modal">Cerrar Caja</button>--}}
                </div>
                <button type="submit" class="btn btn-simple">Pagar</button>

{{--            </form>--}}
        </div>
    </div>
</div>
