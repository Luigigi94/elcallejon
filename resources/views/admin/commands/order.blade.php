@extends('layouts.app')
@section('body-class','product-page')
@section('title','Orden de la mesa: '.$id)
@section('content')

    <div class="page-header header-filter" data-parallax="true" filter-color="rose" style="background-image: url('{{asset('/img/bg6.jpg')}}');">
        <div class="container">
            <div class="row title-row">
                <div class="col-md-4 col-md-offset-8">
                    <a href="{{ url('/admin/command/'.$id) }}" class="btn btn-white pull-right"><i class="material-icons">shopping_cart</i> 0 Items</a>
                </div>

            </div>
        </div>
    </div>

    <div class="section section-gray">
        <div class="container">
            <div class="main main-raised main-product">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Shopping Cart Table</h4>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <div class="table-responsive">
                            <table class="table table-shopping">
                                <thead>
                                <tr>
                                    <th class="text-center"></th>
                                    <th >Product</th>
                                    <th class="text-right">Price</th>
                                    <th class="text-right">Qty</th>
                                    <th class="text-right">Amount</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($firsttry as $ft)
{{--                                    @dd($ft)--}}
                                <tr>
                                    <td>
                                        <div class="img-container">
                                            <img src="{{ $ft->image }}" alt="...">
                                        </div>
                                    </td>
                                    <td class="td-name">
                                        <a href="{{ url('/products/'.$ft->id) }}">{{ $ft->name }}</a>
                                    </td>

                                    <td class="td-number">
                                        <small>&dollar;</small>{{ $ft->price }}
                                    </td>
                                    <td class="td-number">
                                        {{ $ft->quantity }}
                                        <div class="btn-group">
                                            <button class="btn btn-round btn-info btn-xs"> <i class="material-icons">remove</i> </button>
                                            <button class="btn btn-round btn-info btn-xs"> <i class="material-icons">add</i> </button>
                                        </div>
                                    </td>
                                    <td class="td-number">
                                        <small>&dollar;</small> {{ $ft->subtotal }} <input type="hidden" id="amount" value="{{ $ft->subtotal  }}">
                                    </td>
                                    <td class="td-actions">
                                        <button type="button" rel="tooltip" data-placement="left" title="Remove item" class="btn btn-simple">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="0">
                                    </td>
                                    <td class="td-total">
                                        Total
                                    </td>
                                    <td class="td-price">
                                        <small>&dollar;</small>2,346
                                    </td>
                                    <td colspan="0" class="text-right"> <a href="{{ url('/admin/commando') }}" type="button" class="btn btn-info btn-round">Pagar Cuenta<i class="material-icons">keyboard_arrow_right</i></a></td>

                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')

@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function (){
            console.log({{$suma}})
        })

    </script>
@endsection
