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
