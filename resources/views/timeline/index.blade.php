<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Elyan</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{ route('home')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>Elyan</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Elyan</b></span>
        </a>
        <!-- Menú de navegacion -->
        @if(Auth::check())
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Tienes 4 mensajes</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user2-160x160.jpg" class="img-circle"
                                                         alt="User Image">
                                                </div>
                                                <h4>
                                                    Soprte
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>prueba</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user3-128x128.jpg" class="img-circle"
                                                         alt="User Image">
                                                </div>
                                                <h4>
                                                    prueba
                                                    <small><i class="fa fa-clock-o"></i> 2 horas</small>
                                                </h4>
                                                <p>prueba</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user4-128x128.jpg" class="img-circle"
                                                         alt="User Image">
                                                </div>
                                                <h4>
                                                    prueba
                                                    <small><i class="fa fa-clock-o"></i> Hoy</small>
                                                </h4>
                                                <p>prueba</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">Ver todos los mensajes</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Tienes 10 notificaciones</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> Hay 5 usuarios nuevos
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-yellow"></i> prueba
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-red"></i> 5 personas se unieron a tu red
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-green"></i> probando
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-red"></i> Actualizaste tu perfil de ususario
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">Ver todo</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Tienes 9 tareas por realizar</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Deberes
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                         role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                         aria-valuemax="100">
                                                        <span class="sr-only">20% completado</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Presentar trabajos
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%"
                                                         role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                         aria-valuemax="100">
                                                        <span class="sr-only">40% completado</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">Ver todas las tareas</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Cuenta de usuario -> dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!--<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
                                <img src="{{Auth::user()->getAvatarUrl()}}" class="user-image" alt="User Image">
                                <span class="hidden-xs">{{ Auth::user()->getNameOrUserName() }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <!--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
                                    <img src="{{Auth::user()->getAvatarUrl()}}" class="img-circle" alt="User Image">
                                    <p>
                                        {{ Auth::user()->getNameOrUserName() }} - Desarrollador de Software
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu  -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="{{ route('friend.index') }}">Amigos</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="{{route('profile.edit')}}">Completar Perfil</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="{{route('home')}}">Foro</a>
                                    </div>
                                </li>
                                <!-- Menu Pie de página-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="{{ route('profile.index',['nombreusuario'=> Auth::user()->nombreusuario ]) }}"
                                           class="btn btn-default btn-flat">
                                            Mi Perfil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ route('auth.signout') }}" class="btn btn-default btn-flat">Cerrar
                                            Sesión</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        @endif
    </header>

    <!-- Columna de la izquierda -->
    <aside class="main-sidebar">
        <!-- sidebar: estilo esta en -> sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{Auth::user()->getAvatarUrl()}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->getNameOrUserName() }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Conectado</a>
                </div>
            </div>
            <!-- Formulario de búsqueda -->
            <form role="search" action="{{ route('search.results')}}" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="query" class="form-control" placeholder="Buscar amigos">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>

            <!-- Formulario de búsqueda -->
            <ul class="sidebar-menu">
                <li class="header">Menú Principal</li>
                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-tasks"></i> <span>Gestión de Tareas</span> <i
                                class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="{{ route('task.index') }}"><i class="fa fa-circle-o"></i> Ver Tareas</a></li>
                        <li><a href="{{ route('task.create') }}"><i class="fa fa-circle-o"></i>Nueva Tarea</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('calendar') }}">
                        <i class="fa fa-calendar"></i> <span>Calendario</span>
                        <small class="label pull-right bg-red">3</small>
                    </a>
                </li>
                <li>
                    <a href="pages/mailbox/mailbox.html">
                        <i class="fa fa-envelope"></i> <span>Correo</span>
                        <small class="label pull-right bg-yellow">12</small>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Envoltura de la página -->
    <div class="content-wrapper">
        <!-- Contebedor del Header  -->
        <section class="content-header">
            <h1>
                Panel Administrativo de:
                <small>{{ Auth::user()->getNameOrUserName() }}</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active">Panel de Control</li>
            </ol>
        </section>

        <!-- Contenido Principal -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <!-- Caja de Tareas -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>15<sup style="font-size: 20px"></sup></h3>
                            <p>Gestionar Tareas</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-book"></i>
                        </div>
                        <a href="#" class="small-box-footer">Revisión de Tareas<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- FIN Caja de Tareas -->

                <!-- Caja de Solicitudes de Amistad -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>Solicitudes </h3>
                            <p>de Amistad</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">Gestionar Amigos <i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- Caja de Solicitudes de Amistad -->

                <!-- Fila Principal -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-md-12 connectedSortable">

                        <!-- cAJA DE PUBLICACIONES -->
                        <div class="box box-success">

                            <div class="box-header">
                                <i class="fa fa-comments-o"></i>
                                <center><h3 class="box-title">Publicaciones:</h3></center>
                                <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                                    <div class="btn-group" data-toggle="btn-toggle">
                                        <button type="button" class="btn btn-default btn-sm active"><i
                                                    class="fa fa-square text-green"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="box-body chat" id="chat-box">

                                <!-- ITEM DE LAS PUBLICACIONES -->
                                @if(!$estados->count())
                                    <p>Aún no hay publicaciones que mostrar en tu muro</p>

                                @else
                                    @foreach($estados as $estado)
                                        <hr class="lineaDivisoria">
                                        <div class="item">
                                            <img src="dist/img/user4-128x128.jpg"
                                                 alt="{{$estado->user->getNameOrUsername()}}" class="online">
                                            <p class="message">
                                                <a href="{{route('profile.index', ['nombreusuario' => $estado->user->nombreusuario])}}"
                                                   class="name">
                                                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i>
                                                        <b>{{ $estado->created_at->diffForHumans()}}</b>
                                                    </small>
                                                    {{$estado->user->getNameOrUsername()}}
                                                </a>
                                                {{ $estado->comentario }}
                                            </p>
                                            <ul class="list-inline">
                                                @if($estado->user->id !== Auth::user()->id)
                                                    <li>
                                                        <a href="{{route('status.like', ['estadoId' => $estado->id ])}}">Me
                                                            gusta</a>
                                                    </li>
                                                @endif
                                                <li>{{$estado->likes->count()}} {{ str_plural('like' , $estado->likes->count()) }}</li>
                                            </ul>

                                            <!--RESPUESTAS DE POST -->
                                            <div class="attachment">
                                                <h4>Respuestas:</h4>
                                                @foreach($estado->replies as $reply)
                                                    <div class="media">
                                                        <a class="pull-left"
                                                           href="{{ route('profile.index', ['nombreusuario' => $reply->user->nombreusuario])}}">
                                                            <img class="media-object"
                                                                 alt="{{$reply->user->getNameOrUsername()}}"
                                                                 src="{{$reply->user->getAvatarUrl() }}">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="media-heading"><a
                                                                        href="{{ route('profile.index', ['nombreusuario' => $reply->user->nombreusuario])}}">
                                                                    {{ $reply->user->getNameOrUsername()}}
                                                                </a></h5>
                                                            <p>{{$reply->comentario}}</p>
                                                            <ul class="list-inline">
                                                                <li>
                                                                    Creado: {{$reply->created_at->diffForHumans() }}</li>
                                                                @if($reply->user->id !== Auth::user()->id )
                                                                    <li>
                                                                        <a href="{{route('status.like', ['estadoId' => $reply->id ])}}">Me
                                                                            gusta</a></li>
                                                                @endif
                                                                <li> {{$reply->likes->count()}} {{ str_plural('like' , $reply->likes->count()) }} </li>
                                                            </ul>
                                                        </div>
                                                        <input type="hidden" name="_token" value="{{Session::token()}}">
                                                    </div>
                                                    @endforeach
                                                            <!-- FORMULARIO DE RESPUESTA A POST -->
                                                    <form role="form"
                                                          action="{{route('status.reply', ['estadoId' => $estado->id])}}"
                                                          method="post">
                                                        <div class="form-group{{$errors->has("reply-{$estado->id}") ? 'has-error': ''}}">
                                    <textarea name="reply-{{ $estado->id }}" class="form-control" rows="2"
                                              placeholder="Opina sobre este estado"></textarea>
                                                            @if ($errors->has("reply-{$estado->id}"))
                                                                <span class="help-block">{{$errors->first("reply-{$estado->id}")}}
                                                                    ></span>
                                                            @endif
                                                        </div>
                                                        <input type="submit" value="Responder"
                                                               class="btn btn-info btn-sm">

                                                        <input type="hidden" name="_token" value="{{Session::token()}}">
                                                    </form><!-- FORMULARIO DE RESPUESTA A POST -->

                                            </div><!-- FIN DE RESPUESTA DE POST -->

                                        </div><!-- FINAL DE ITEM DE PUBLICACIONES -->
                                    @endforeach
                                    {!! $estados->render() !!}
                                @endif

                            </div><!-- /.chat -->
                            <!-- ESCRIBIR COMENTARIOS -->
                            <div class="box-footer">
                                <form role="form" action="{{ route('status.post') }}" method="post">
                                    <div class="form-group{{$errors->has('email') ? 'has-error' :
                 ''}}">
                    <textarea placeholder="Tienes algo que decir {{ Auth::user()->getFirstNameOrUsername() }}?"
                              name="estado" class="form-control" rows=""></textarea>
                                        @if($errors->has('estado'))
                                            <span class="help-block">{{$errors->first('estado') }}</span>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
                                        Publicar
                                    </button>
                                    <input type="hidden" name="_token" value="{{Session::token()}}">
                                </form>
                            </div>
                            <!-- ESCRIBIR COMENTARIOS -->
                        </div><!-- FIN CAJA DE PUBLICACIONES -->

                    </section><!-- /.Columna -->

                </div><!-- /FIN Fila Principal -->
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2016 <a href="#">Desarrollado por Bryan Suárez</a>.</strong> Quito, Ecuador.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Actividades Recientes</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cumpleanos de xxx</h4>
                                <p>05-05-2016</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-user bg-yellow"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Trabajo de Oracle</h4>
                                <p>15-05-2016</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nueva Solicitud de Amistad</h4>
                                <p>nuevo usuario</p>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Progreso de Tareas</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Terminar tesis
                                <span class="label label-danger pull-right">70%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Entragar trabajo de java
                                <span class="label label-success pull-right">95%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Documentar la tesis
                                <span class="label label-warning pull-right">50%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

            </div><!-- /.tab-pane -->
        </div>
    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->
>
<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>