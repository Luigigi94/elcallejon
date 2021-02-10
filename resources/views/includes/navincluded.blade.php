<nav class="navbar navbar-dark navbar-absolute navbar-fixed-top navbar-color-on-scroll">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation
					.</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{--            <a class="navbar-brand" href="../presentation.html">Material Kit PRO</a>--}}
            @if(auth()->user())
                <a class="navbar-brand" href="{{url('/home')}}">
                    {{config('app.name')}} </a>
            @else
                <a class="navbar-brand" href="{{url('/')}}">
                    {{config('app.name')}} </a>
            @endif
        </div>

        <div class="collpase navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i class="material-icons">account_circle</i>{{ __('Ingresar') }}</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><i class="material-icons">person_add</i>{{ __('Registro') }}</a>
                        </li>
                    @endif
                @else
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesión') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">account_box</i>                             {{ Auth::user()->name }}
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons">
                            <li>
                                <a href="{{url('/admin/savings')}}">
                                    <i class="material-icons">attach_money</i> Reserva Caja Registradora
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/admin/boards')}}">
                                    <i class="material-icons">coffee</i> Mesas
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/tills') }}">
                                    <i class="material-icons">local_grocery_store</i> Caja Registradora
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/users') }}">
                                    <i class="material-icons">account_circle</i> Usuarios
                                </a>
                            </li>
                            <li>

                            </li>
                        </ul>
                    </li>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
