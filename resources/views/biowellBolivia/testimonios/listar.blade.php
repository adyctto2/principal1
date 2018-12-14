@extends('layouts.biowell')
@section('contenidoBiowell')
<h1>Lista de productos</h1>
<div class="row">
    <div class="col-md-9">
        <input type="text" placeholder="Buscar" class="form-control boton-crear">
    </div>
    <div class="col-md-3 boton-crear">
        <a href="{{ route('ctest')}}" class="btn btn-primary btn-block">Crear Producto</a>
    </div>
</div>
<div>
    <table class="table table-hover">
        <thead>
            <tr class="active">
                <th>N°</th>
                <th>Nombre</th>
                <th>Profesion</th>
                <th>Testimonio</th>
                <th>Fecha</th>
                <th>Producto</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($dat as $d)
            <tr>
                <th>{{ $d->id }}</th>
                <th>{{$d->nombre}}</th>
                <th>{{ $d->profesion}}</th>
                <th>{{ $d->testimonio}}</th>
                @php
                    $dat = \App\Productos::where('id','=',$d->id_producto)->first();
                    if(count($dat)>=0)
                        $respuesta = $dat->nombre;
                    else
                        $respuesta = "ninguno";
                @endphp
                <th>{{ $respuesta }}</th>
                <th><a href="{{ route('etest',['id' =>  $d->id])}}">Editar</a></th>
                
                <th>
                    <form action="{{ route('btest',['id' =>  $d->id])}}" method="post">
                            {!! method_field('delete') !!}
                            {!! csrf_field() !!}
                        <input type="submit" value="eliminar">
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection