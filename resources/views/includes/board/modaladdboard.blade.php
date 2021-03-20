<div class="modal fade" id="modalAddBoard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
                <h4 class="modal-title">Crear una nueva mesa</h4>
            </div>

            <form action="{{ url('/admin/boards') }}" method="post">
                {{ csrf_field() }}

                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Numero de Mesa</label>
                                <input type="number" id="num_board" name="num_board" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Lugar de Mesa</label>
                                <input type="text" id="place" name="place" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-simple" id="btn_addboard">Añadir</button>
                    <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
