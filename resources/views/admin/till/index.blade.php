@extends('layouts.app')
@section('body-class','product-page')
@section('title','Caja Registradora')
@section('content')

    <div class="features-5" style="background-image: url('{{asset('/img/bg9.jpg')}}')">

        <div class="col-md-8 col-md-offset-2 text-center">
            <h2 class="title">Your life will be much easier</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="info">
                        <div class="icon">
                            <i class="material-icons">code</i>
                        </div>
                        <h4 class="info-title">For Developers</h4>
                        <p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="info" style="visibility: hidden">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="info">
                        <div class="icon">
                            <i class="material-icons">dashboard</i>
                        </div>
                        <h4 class="info-title">Bootstrap Grid</h4>
                        <p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    @include('includes.footer')
@endsection


