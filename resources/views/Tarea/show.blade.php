@extends('tema.app')

@section('title' , 'Tarea')

@section('contenido')
    
<h3>
    {{$tarea->nombre}}
</h3>
<ul>
    <li>
        Finalizada: <strong>{{$tarea->finalizada()}}</strong>
    </li>
    <li>
        Urgencia: <strong>{{$tarea->urgencia()}}</strong>
    </li>
    <li>
        Fecha Limite: <strong>{{$tarea->fecha_limite}}</strong>
    </li>
</ul>

<p> Descripcion: {{$tarea->descripcion}}</p>
<hr>
<div class="row">
    <div class="col-sm-6">
        <form action="{{route('tarea.destroy',$tarea)}}" method="POST">
        @csrf
        @method('delete')
        <button class="btn btn-danger btn-sm" type="submit">Borrar</button>
        </form>
    </div>
</div>
@endsection

