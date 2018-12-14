@extends('layouts.biowell')
@section('contenidoBiowell')

<h1>{{ $datos->nombre }}</h1>
<h3>Correo Electronico: <strong>{{ $datos->email}}</strong></h3>    
<h3>Telefono: <strong>{{ $datos->telefono}}</strong></h3>    
<h3>Pais: <strong>{{ $datos->pais}}</strong></h3>    
<h3>Fecha de reserva: <strong>{{ $datos->fecha}}</strong></h3> 
<hr>
<h2>Detalle del producto</h2>
<h3>Nombre: <strong>{{$prod->nombre}}</strong></h3>
<h3>Costo: <strong>{{$prod->costo}}</strong></h3>
<div class="row">
    <div class="col-md-6"><a href="{{ route('ecr',['id' =>  $datos->id])}}" class="btn btn-success btn-block">Responder</a></div>
    <div class="col-md-6"><a href="{{ route('rs')}}" class="btn btn-warning btn-block">Volver</a></div>
</div>
@endsection