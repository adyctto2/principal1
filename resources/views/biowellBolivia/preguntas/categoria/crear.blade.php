@extends('layouts.biowell')
@section('contenidoBiowell')
<h1>Actualizar producto</h1>
    <form action="{{route('crearcat')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="nombre_cat">Categoria</label>
            <input type="text" class="form-control" placeholder="Categoria" required name="nombre_cat" id="nombre_cat">
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