<nav class="navbar navbar-default" id="menuprincipal">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home')}}"><i class="fa fa-users"></i> Elian App</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            @if(Auth::check())
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('home') }}">Muro</a></li>
                    <li><a href="{{ route('friend.index') }}">Amigos</a></li>
                </ul>
                <form class="navbar-form navbar-left" role="search" action="{{ route('search.results')}}">
                    <div class="form-group">
                        <input type="text" name="query" class="form-control" placeholder="Buscar amigos">
                    </div>
                    <button type="submit" class="btn btn-warning"><i class="fa fa-search"></i> Buscar</button>
                </form>
            @endif


            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li><a href="{{route('profile.index',['nombreusuario' => Auth::user()->nombreusuario])}}">
                            {{ Auth::user()->getNameOrUserName() }}</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Opciones <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('profile.edit')}}">Actualizar Perfil</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('auth.signout') }}"><i class="fa fa-sign-out"></i> Cerrar Sesión</a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<style>
    #menuprincipal {
        background-color: #3c8dbc !important;
    }

    .navbar-default .navbar-nav > li > a {
        color: #FFFFFF;
    }

    .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:hover {
        color: #00c0ef;
        background-color: transparent;
    }

    .navbar-default .navbar-brand {
        color: #FFFFFF;
    }

    .navbar-default .navbar-brand:hover {
        color: #f0ad4e;
        background-color: transparent;
    }

    .dropdown-menu > li > a {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: 400;
        line-height: 1.42857143;
        color: #3c8dbc;
        white-space: nowrap;
    }
</style>