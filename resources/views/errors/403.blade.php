<!DOCTYPE html>
<html>
<head>
    <title>Acción Denegada</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 72px;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Acción no permitida.</div>
        <h4>No tiene permisos para realizar esta acción porque no es propietario del recurso</h4>
        <h3><a href="{{ route('home')  }}">Volver al Inicio</a></h3>
    </div>
</div>
</body>
</html>
