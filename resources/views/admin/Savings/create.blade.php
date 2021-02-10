@extends('layouts.app')
@section('body-class','product-page')
@section('title','Reserva de la Registradora (admin)')
@section('content')
    <div class="page-header header-filter" data-parallax="true" filter-color="rose" style="background-image: url('../assets/img/bg6.jpg');">
        <div class="container" style="visibility: hidden">
            <div class="row title-row">
                <div class="col-md-4 col-md-offset-8">
                    <a href="{{ url('/admin/savings/create') }}" class="btn btn-white pull-right"><i class="material-icons">shopping_cart</i> 0 Items</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-gray">
        <div class="container">
            <div class="main main-raised main-product">
                <div class="container">
                    <div class="section">
                        <h2 class="title text-center">Registrar</h2>

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
                                    <a href="{{url()->previous()}}" class="btn btn-default">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection
