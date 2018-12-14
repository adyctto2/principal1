@extends('layouts.biowell')
@section('contenidoBiowell')
<h1>Actualizar producto</h1>
    <form action="{{route('crearS')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="email">Correo del Suscriptor</label>
            <input type="email" class="form-control" placeholder="Correo del Suscriptor" required name="email" id="email">
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <input type="submit" value="Guardar Producto" name="guardar" class="btn btn-primary btn-block">

                </div>
                <div class="col-md-6">
                    <a href="{{route('lsus')}}" class="btn btn-danger btn-block">Cancelar</a>

                </div>
            </div>
        </div>
    </form>
@endsection