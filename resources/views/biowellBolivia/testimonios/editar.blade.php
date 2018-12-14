@extends('layouts.biowell')
@section('contenidoBiowell')
<h1>Actualizar producto</h1>
    <form action="{{route('acttest')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" placeholder="Nombre" required name="nombre" id="nombre" value ="{{ $id->nombre }}">
        </div>
        <div class="form-group">
            <label for="profesion">Profesion</label>
            <input type="text" class="form-control" placeholder="Profesion" required name="profesion" id="profesion" value ="{{ $id->profesion }}">
        </div>
        <div class="form-group">
            <label for="testimonio">Testimonio</label>
            <textarea name="testimonio" id="testimonio" rows="3" class="form-control" placeholder="Testimonio">{{ $id->testimonio }}</textarea>
        </div>
        <div class="form-group">
            <label for="id_producto">Producto</label>
            <select name="id_producto" id="id_producto" class="form-control">
                @php
                    $v = \App\Productos::all();
                @endphp
                @foreach($v as $va)
                    <option value="{{ $va->id }}" @if($va->id == $id->id_producto) selected @endif>{{ $va->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="imagen">Imagen del producto</label>
            <input type="file" name="imagen" id="imagen" placeholder="foto de la persona" accept="image/*" >
        </div>
        <div class="form-group">
            <label for="id">No modificar este campo</label>
            <input type="text" class="form-control" placeholder="id" required name="id" id="id" value ="{{ $id->id }}">
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <input type="submit" value="Guardar Producto" name="guardar" class="btn btn-primary btn-block">

                </div>
                <div class="col-md-6">
                    <a href="{{route('ltest')}}" class="btn btn-danger btn-block">Cancelar</a>

                </div>
            </div>
        </div>
    </form>
@endsection