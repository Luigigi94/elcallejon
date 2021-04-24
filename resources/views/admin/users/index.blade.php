@extends('layouts.app')
@section('body-class','profile-page')
@section('title','Usuarios de '.auth()->user()->name)
@section('content')

    <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/examples/city.jpg')}}');"></div>
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="profile">
                            <div class="avatar">
                                <img src="{{ asset('img/img.jpg') }}" alt="Circle Image" class="img-circle img-responsive img-raised">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-2 follow">
                        <a href="{{ url('/admin/users/create') }}" class="btn btn-fab btn-primary" rel="tooltip" title="Agregar Usuarios">
                            <i class="material-icons">add</i>
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
{{--                            <th class="text-center">id</th>--}}
                            <th>Nombre</th>
                            <th>Fecha de Contratación</th>
                            <th>Administrador</th>
                            <th class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
{{--                                <td class="text-center">{{$user->id}}</td>--}}
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->created_at }}</td>
{{--                                $resultado = $condicion ? 'verdadero' : 'falso';--}}
                                <td>@if(($user->admin) == 1)admin @else Empleado @endif </td>
                                <td class="td-actions text-right">
                                    <button class="btn btn-info" rel="tooltip" data-placement="left" title="Ver" data-toggle="modal" data-target="#view_user">
                                        <i class="material-icons">person</i>
                                    </button>
                                    <button class="btn btn-info" rel="tooltip" data-placement="left" title="Editar" data-toggle="modal" data-target="#view_user">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <form action="{{ url('/admin/users/'.$user->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        {{--<a href="#something" type="button" rel="tooltip" class="btn btn-info" data-placement="left" title="Ver">
                                            <i class="material-icons">person</i>
                                        </a>--}}
                                        {{--<a href="{{ url('/admin/users/'.$user->id.'/edit') }}" type="button" rel="tooltip" class="btn btn-success" data-placement="left" title="Editar">
                                            <i class="material-icons">edit</i>
                                        </a>--}}
                                        <button type="submit" rel="tooltip" class="btn btn-danger" data-placement="left" title="Eliminar">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@include('includes.footer')
@include('includes.users.modal_view_user')
@endsection
