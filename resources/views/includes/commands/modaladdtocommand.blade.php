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
{{--<div id="formModal" class="modal fade" role="dialog">--}}
{{--    <div class="modal-dialog">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modalheader">--}}
{{--                <button class="close" data-dismiss="modal" type="button">&times;</button>--}}
{{--                <h4 class="modal-title" id="labelcambia"></h4>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <span id="form_result"></span>--}}
{{--                <form method="post" id="sample_form" class="form-horizontal" enctype="multipart/form-data">--}}
{{--                    {{ csrf_field() }}--}}
{{--                    <div class="form-group">--}}
{{--                        <input type="text" id="nombreprod">--}}
{{--                        <label for="quantity" class="control-label col-md-4">Quantity:</label>--}}
{{--                        <div class="col-md-8">--}}
{{--                            <input type="number" id="quantity" name="quantity" class="form-control">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <input type="text" disabled name="commandas" id="commandas" value="boardid {{ $commandas }}">--}}
{{--                        <input type="text" disabled name="user_id" id="user_id" value="userid {{ auth()->user()->id }}">--}}
{{--                        <input type="text" disabled name="action" id="action" value="action">--}}
{{--                        <input type="text" disabled name="hidden_id" id="hidden_id" value="hiddenid">--}}
{{--                        <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="ADD">--}}
{{--                        <button type="submit"></button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

