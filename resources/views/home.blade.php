<style>
    .team .row .col-md-6{
        margin-bottom: 1em;
    }
    .row {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display:         flex;
        flex-wrap: wrap;
    }
    .row > [class*='col-'] {
        display: flex;
        flex-direction: column;
    }

    #elhref{
        color: #fff;
        text-align: center;
    }
</style>
@extends('layouts.app')
@section('body-class','profile-page')
@section('title','Dashboard de '.auth()->user()->name)
@section('content')
@if(auth()->user()->admin == 3)
@elseif(auth()->user()->admin == 2)
    @include('includes.cartemploy')
@elseif(auth()->user()->admin == 1)
@endif

@include('includes.footer')
@endsection
