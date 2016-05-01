@extends('templates.default')

@section('content')


        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="{{route('home')}}"><b>Elyan</b></a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Formulario de Registro</p>
        <form class="form-vertical" role="form" method="post" action="{{route('auth.signup')}}">
            <div class="form-group {{$errors->has('nombreusuario') ? 'has-error' :
                 ''}} has-feedback">
                <input type="text" name="nombreusuario" placeholder="Nombre de Usuario" class="form-control"
                       id="nombreusuario" value="{{Request::old('nombreusuario') ?: '' }}">
                @if($errors->has('nombreusuario'))
                    <span class="help-block">{{$errors->first('nombreusuario') }}</span>
                @endif
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group {{$errors->has('email') ? 'has-error' :
                 ''}} has-feedback">
                <input type="text" name="email" placeholder="Email" class="form-control" id="email"
                       value="{{Request::old('email') ?: '' }}">
                @if($errors->has('email'))
                    <span class="help-block">{{$errors->first('email') }}</span>
                @endif
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="form-group {{$errors->has('password') ? 'has-error' :
                 ''}} has-feedback">
                <input type="password" name="password" placeholder="Password" class="form-control" id="password"
                       value="{{Request::old('password') ?: '' }}">
                @if($errors->has('password'))
                    <span class="help-block">{{$errors->first('password') }}</span>
                @endif
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-5 col-xs-offset-1">
                    <div class="checkbox icheck">
                        <!-- Button trigger modal -->
                        <label>
                            <input type="checkbox"> <a data-toggle="modal" data-target="#myModal" href="#"> Acepto los
                                términos y condiciones</a>
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-plus-square" aria-hidden="true"></i> Registrar</button>
                </div><!-- /.col -->
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </div>
        </form>
        <a href="{{route('home')}}" class="text-center">Iniciar Sesión</a>


        <!-- Modal de Términos y Condiciones -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Términos y Condiciones</h4>
                    </div>
                    <div class="modal-body">
                        La Red Social "Elian", ha sido desarrollada para mantener el contacto entre la comunidad de
                        estudiantes del
                        Instituto Tecnológico Para el Desarrollo "ISPADE", en nuestra aplicación podrás:
                        <ul>
                            <li>Compartir y resolver tus inquietudes</li>
                            <li>Administrar tus tareas estudiantiles</li>
                            <li>Manener un continuo contacto con los alumnos del instituto</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Modal de Términos y Condiciones -->

    </div><!-- /.form-box -->
</div><!-- /.register-box -->

<!-- jQuery 2.1.4 -->
<script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
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
</body>
</html>


@stop