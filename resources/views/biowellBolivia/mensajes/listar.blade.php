@extends('layouts.biowell')
@section('contenidoBiowell')
<h1>Lista de mensajes</h1>
<div class="row">
    <div class="col-md-12">
        <input type="text" placeholder="Buscar" class="form-control boton-crear">
    </div>
</div>
<div>
    <table class="table table-hover">
        <thead>
            <tr class="active">
                <th>N°</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Asunto</th>
                <th>Fecha</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($datos as $d)
            <tr @if($d->estado == 0 ) class="info" @endif>
                <th>{{ $d->id }}</th>
                <th>{{$d->nombre}}</th>
                <th>{{ $d->email }}</th>
                <th>{{ $d->asunto }}</th>
                <th>{{ $d->fecha}}</th>
                <th><a href="{{ route('vm',['id' =>  $d->id])}}">Ver</a></th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection