<div class="section">
    <h4 class="title text-center">Cambiar Guardadito</h4>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $errors)
                    <li>{{ $errors }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ url('/admin/savings/') }}">
        {{csrf_field()}}

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">cantidad</label>
                    <input type="number" class="form-control" name="quantity" value="{{ old('quantity') }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">

                <button type="submit" class="btn btn-primary">Submit</button>
{{--                <a href="{{url()->previous()}}" class="btn btn-default">Cancel</a>--}}
            </div>
        </div>
    </form>
</div>
