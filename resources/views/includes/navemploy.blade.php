<nav class="navbar navbar-default navbar-transparent navbar-fixed-top navbar-color-on-scroll" color-on-scroll=" " id="sectionsNav">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/home')}}">{{config('app.name')}}</a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesión') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">account_box</i>{{ Auth::user()->name }}
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-with-icons">
                        <li>
                            <a href="{{url('/admin/categories')}}">
                                <i class="material-icons">attach_money</i> Listado de Categorias
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/admin/products')}}">
                                <i class="material-icons">attach_money</i> Listado de Productos
                            </a>
                        </li>
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
            </ul>
        </div>
    </div>
</nav>
