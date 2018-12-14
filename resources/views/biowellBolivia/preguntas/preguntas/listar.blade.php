@extends('layouts.biowell')
@section('contenidoBiowell')
<h1>Lista de Preguntas</h1>
<div class="row">
    <div class="col-md-9">
        <input type="text" placeholder="Buscar" class="form-control boton-crear">
    </div>
    <div class="col-md-3 boton-crear">
        <a href="{{ route('cpreg')}}" class="btn btn-primary btn-block">Crear Pregunta</a>
    </div>
</div>
<div>
    <table class="table table-hover">
        <thead>
            <tr class="active">
                <th>N°</th>
                <th>Pregunta</th>
                <th>Respuesta</th>
                <th>Categoria</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($dat as $d)
            <tr>
                <th>{{ $d->id }}</th>
                <th>{{$d->pregunta}}</th>
                <th>{{$d->respuesta}}</th>
                @php
                 $var = \App\Category::where('id','=',$d->id_categoria)->first();
                @endphp
                
                <th>{{$var->nombre_cat}}</th>
                <th><a href="{{ route('epreg',['id' =>  $d->id])}}">Editar</a></th>
                
                <th>
                    <form action="{{ route('bpreg',['id' =>  $d->id])}}" method="post">
                            {!! method_field('delete') !!}
                            {!! csrf_field() !!}
                        <input type="submit" value="eliminar">
                    </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection