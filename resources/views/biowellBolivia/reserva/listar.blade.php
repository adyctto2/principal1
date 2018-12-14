@extends('layouts.biowell')
@section('contenidoBiowell')
<h1>Lista de reservas</h1>
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
                <th>Producto</th>
                <th>Fecha</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($datos as $d)
            <tr @if($d->estado == 0 ) class="info" @endif>
                <th>{{ $d->id }}</th>
                <th>{{$d->nombre}}</th>
                <th>{{ $d->id_producto}}</th>
                <th>{{ $d->fecha}}</th>
                <th><a href="{{ route('vr',['id' =>  $d->id])}}">Ver</a></th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection