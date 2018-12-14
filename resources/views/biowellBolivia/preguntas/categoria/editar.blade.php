@extends('layouts.biowell')
@section('contenidoBiowell')
<h1>Actualizar producto</h1>
    <form action="{{route('actcat')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="nombre_cat">Categoria</label>
            <input type="text" class="form-control" placeholder="Correo del Suscriptor" required name="nombre_cat" id="nombre_cat" value="{{ $id->nombre_cat}}">
        </div>

        <div class="form-group">
            <label for="id">No modificar este campo</label>
            <input type="number" class="form-control" placeholder="" required name="id" id="id" value="{{ $id->id}}">
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <input type="submit" value="Guardar Producto" name="guardar" class="btn btn-primary btn-block">

                </div>
                <div class="col-md-6">
                    <a href="{{route('listcat')}}" class="btn btn-danger btn-block">Cancelar</a>

                </div>
            </div>
        </div>
    </form>
@endsection