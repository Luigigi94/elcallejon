<div class="modal fade" id="ModalAddtoCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
                <h4 class="modal-title">Seleccione la cantidad de {{ $product->name }}</h4>
            </div>

            <form action="{{ url('/cart') }}" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="modal-body">
                    <input type="number" name="quantity" value="1" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-simple">Añadir</button>
                    <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
