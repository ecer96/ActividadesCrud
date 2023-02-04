@extends('tema.app')

@section('title' , 'Listado de Tareas')

@section('contenido')
    
<h3>    
    Listado de Tareas
</h3>

<table class="table table-stripped table-hover">
    <thead>
        <tr>
            <th>
                Nombre
            </th>
            <th>
                Finalizada
            </th>
            <th>
                Fecha Limite
            </th>
            <th>
                Urgencia
            </th>
            <th>
                Descripcion
            </th>
            <th>
                Opciones
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tareas  as $tarea )
            <tr>
                <td>
                    {{$tarea->nombre}}
                </td>
                <td>
                    {{$tarea->finalizada()}}
                </td>
                <td>
                    {{$tarea->fecha_limite->format('H:i d / m / Y')}}
                </td>
                <td>
                    {{ $tarea->urgencia()}}
                </td>
                <td>
                    {{$tarea->descripcion}}
                </td>
                <td>
                  
                    <a href="{{route('tarea.edit',$tarea)}}">Editar</a>
                    <a href="{{route('tarea.show',$tarea)}}">Ver</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection

