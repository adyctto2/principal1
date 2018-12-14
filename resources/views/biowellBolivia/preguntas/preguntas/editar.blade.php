@extends('layouts.biowell')
@section('contenidoBiowell')
<h1>Actualizar producto</h1>
    <form action="{{route('actpreg')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="pregunta">Pregunta</label>
            <input type="text" class="form-control" placeholder="Pregunta" required name="pregunta" id="pregunta" value="{{ $id->pregunta}}">
        </div>
        <div class="form-group">
            <label for="pregunta">Respuesta</label>
            <textarea name="respuesta" id="respuesta"  rows="5" class="form-control">{{$id->respuesta}}</textarea>
        </div>
        <div class="form-group">
            <select class="form-control" name="id_categoria">
                @php
                 $info = \App\Category::all();
                @endphp
                @foreach($info as $i)
                <option value="{{$i->id}}" @if($i->id == $id->id_categoria) selected @endif>{{$i->nombre_cat}}</option>
                @endforeach
              </select>
        </div>
        <div class="form-group">
            <label for="id">No modificar este campo</label>    
            <input type="number" class="form-control" required name="id" id="id" value="{{ $id->id}}">
        
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