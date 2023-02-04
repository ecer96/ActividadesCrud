<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="bg-light ">
    <div class="container shadow bg-white">
        <div class="row">
            <div class="col-sm-12">

                <h1>Crud Tareas</h1>
            </div>
            <div class="col-sm-12">

                <a href={{ route('tarea.create') }} class="btn btn-link">Crear Nueva Tarea</a>
                <a href={{route('tarea.index')}} class="btn btn-link">Listar Tarea</a>
            </div>
            <div class="col-sm-12">
                @yield('contenido')
            </div>
        </div>
    </div>
</body>

</html>