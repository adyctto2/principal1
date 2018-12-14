@extends('layouts.biowell')
@section('contenidoBiowell')

<h1>{{ $datos->nombre }}</h1>
<h3>Correo Electronico: <strong>{{ $datos->email}}</strong></h3>    
<h3>Asunto: <strong>{{ $datos->asunto}}</strong></h3>    
<h3>Fecha: <strong>{{ $datos->fecha}}</strong></h3> 
<hr>
<h2>Mensaje:</h2>
<p>{{$datos->mensaje}}</p>
<div class="row">
    <div class="col-md-6"><a href="{{ route('ecm',['id' =>  $datos->id])}}" class="btn btn-success btn-block">Responder</a></div>
    <div class="col-md-6"><a href="{{ route('msj')}}" class="btn btn-warning btn-block">Volver</a></div>
</div>
@endsection