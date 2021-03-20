@extends('layouts.app')
@section('body-class','pricing')
@section('title','Mesas (Admin)')
@section('content')
<div class="container">

    <h1>Laravel 6 Ajax CRUD tutorial using Datatable - ItSolutionStuff.com</h1>

    <a class="btn btn-success" href="javascript:void(0)" id="createNewProduct"> Create New Product</a>

    <table class="table table-bordered data-table">

        <thead>

        <tr>

            <th>No</th>

            <th>Name</th>

            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

        </thead>

        <tbody>

        </tbody>

    </table>

</div>


<div class="modal fade" id="ajaxModel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title" id="modelHeading"></h4>

            </div>

            <div class="modal-body">

                <form id="boardForm" name="boardForm" class="form-horizontal">

                    <input type="hidden" name="id" id="id">

                    <div class="form-group">

                        <label for="name" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-12">

                            <input type="text" class="form-control" id="num_board" name="num_board" placeholder="Enter Number Board"
                                   value="" maxlength="50" required="">

                        </div>

                    </div>


                    <div class="form-group">

                        <label class="col-sm-2 control-label">Details</label>

                        <div class="col-sm-12">

                            <textarea id="place" name="place" required="" placeholder="Enter Details"
                                      class="form-control"></textarea>

                        </div>

                    </div>


                    <div class="col-sm-offset-2 col-sm-10">

                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>


@endsection

@section('scripts')
<script type="text/javascript">

    $(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('ajaxboards.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'num_board', name: 'num_board'},
                {data: 'place', name: 'place'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });


        $('#createNewProduct').click(function () {
            $('#saveBtn').val("create-board");
            $('#id').val('');
            $('#boardForm').trigger("reset");
            $('#modelHeading').html("Create New Board");
            $('#ajaxModel').modal('show');
        });

        $('body').on('click', '.editBoard', function () {
            var id = $(this).data('id');
            $.get("{{ route('ajaxboards.index') }}" + '/' + id + '/edit', function (data) {
                $('#modelHeading').html("Edit Board");
                $('#saveBtn').val("edit-user");
                $('#ajaxModel').modal('show');
                $('#id').val(data.id);
                $('#num_board').val(data.num_board);
                $('#place').val(data.place);
            })
        });

        $('#saveBtn').click(function (e) {
            e.preventDefault();
            $(this).html('Sending..');
            $.ajax({
                data: $('#boardForm').serialize(),
                url: "{{ route('ajaxboards.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    $('#boardForm').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            });
        });
        $('body').on('click', '.deleteBoard', function () {
            var id = $(this).data("id");
            confirm("Are You sure want to delete !");
            $.ajax({
                type: "DELETE",
                url: "{{ route('ajaxboards.store') }}" + '/' + id,
                success: function (data) {
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
    });
</script>
@endsection
