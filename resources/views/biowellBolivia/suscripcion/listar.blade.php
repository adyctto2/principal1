@extends('layouts.biowell')
@section('contenidoBiowell')
<h1>Lista de productos</h1>
<div class="row">
    <div class="col-md-9">
        <input type="text" placeholder="Buscar" class="form-control boton-crear">
    </div>
    <div class="col-md-3 boton-crear">
        <a href="{{ route('csus')}}" class="btn btn-primary btn-block">Crear Suscriptor</a>
    </div>
</div>
<div>
    <table class="table table-hover">
        <thead>
            <tr class="active">
                <th>N°</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($dat as $d)
            <tr>
                <th>{{ $d->id }}</th>
                <th>{{$d->email}}</th>
                
                <th>
                    <form action="{{ route('borrarsus',['id' =>  $d->id])}}" method="post">
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