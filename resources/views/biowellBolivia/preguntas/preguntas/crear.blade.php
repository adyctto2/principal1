@extends('layouts.biowell')
@section('contenidoBiowell')
<h1>Actualizar producto</h1>
    <form action="{{route('crearpreg')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="pregunta">Pregunta</label>
            <input type="text" class="form-control" placeholder="Pregunta" required name="pregunta" id="pregunta">
        </div>
        <div class="form-group">
            <label for="pregunta">Respuesta</label>
            <textarea name="respuesta" id="respuesta"  rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <select class="form-control" name="id_categoria">
                @php
                 $info = \App\Category::all();
                @endphp
                @foreach($info as $i)
                <option value="{{$i->id}}">{{$i->nombre_cat}}</option>
                @endforeach
              </select>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <input type="submit" value="Guardar Producto" name="guardar" class="btn btn-primary btn-block">

                </div>
                <div class="col-md-6">
                    <a href="{{route('lpreg')}}" class="btn btn-danger btn-block">Cancelar</a>

                </div>
            </div>
        </div>
    </form>
@endsection