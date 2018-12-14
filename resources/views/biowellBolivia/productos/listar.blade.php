@extends('layouts.biowell')
@section('contenidoBiowell')
<h1>Lista de productos</h1>
<div class="row">
    <div class="col-md-9">
        <input type="text" placeholder="Buscar" class="form-control boton-crear">
    </div>
    <div class="col-md-3 boton-crear">
        <a href="{{ route('cp')}}" class="btn btn-primary btn-block">Crear Producto</a>
    </div>
</div>
<div>
    <table class="table table-hover">
        <thead>
            <tr class="active">
                <th>N°</th>
                <th>Nombre</th>
                <th>Detalle</th>
                <th>Costo</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($dat as $d)
            <tr>
                <th>{{ $d->id }}</th>
                <th>{{$d->nombre}}</th>
                <th>{{ $d->descripcion}}</th>
                <th>{{ $d->costo}}</th>
                <th><a href="{{ route('ep',['id' =>  $d->id])}}">Editar</a></th>
                
                <th>
                    <form action="{{ route('borrarp',['id' =>  $d->id])}}" method="post">
                            {!! method_field('delete') !!}
                            {!! csrf_field() !!}
                        <input type="submit" value="eliminar">
                    </form>
                <th><a href="{{ route('vp',['id' =>  $d->id])}}">Ver</a></th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection