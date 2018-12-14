@extends('layouts.biowell')
@section('contenidoBiowell')
<div class="row">
    <div class="col-md-8">
        <h1>{{ $datos->nombre}}</h1>
    </div>
    <div class="col-md-2">
        <a href="{{ route('ep',['id' =>  $datos->id])}}" class="btn btn-success btn-block boton-crear">Editar</a>
    </div>
    <div class="col-md-2">
        <a href="{{ route('listar')}}" class="btn btn-warning btn-block boton-crear">Volver</a>
    </div>
</div>
<img src="{{ $datos->imagen }}" class="img-responsive img-thumbnail" alt="">
<h3>Precio : {{ $datos->costo}} $us.</h3>
<h3>Descripción:</h3>
<p>{{ $datos->descripcion}}</p>
@endsection