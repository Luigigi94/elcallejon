<div class="modal fade" id="ModalAddtoCommand" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
                                    <h4 class="modal-title" id="labelcambia"></h4>
            </div>

            <form action=" {{ url('/admin/command') }} " method="post"{{-- id="modal_form_add"--}}>
                {{ csrf_field() }}
{{--                {{ method_field('POST') }}--}}

                <input type="text" name="product_id" id="product_id">
                <div class="modal-body">
                    <input type="number" name="quantity" value="1" class="form-control">
                </div>
                <div class="modal-footer">
                    <input type="text" name="commandas" id="commandas" value="{{ $commandas }}">
                    <input type="text" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
{{--                    <input type="text" disabled name="action" id="action" value="action">--}}
{{--                    <input type="text" disabled name="product_id" id="product_id" value="">--}}
                    <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="ADD">
{{--                    <button type="submit" class="btn btn-info btn-round" data-dismiss="modal">Sounds good!</button>--}}
                    <input type="text" name="price" id="price">
                    <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>


