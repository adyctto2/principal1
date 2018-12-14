@extends('layouts.biowell')
@section('contenidoBiowell')

<form action="">
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $datos->nombre}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Correo Eletronico:</label>
        <input type="email" name="email" id="email" value="{{ $datos->email}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="asunto">Asunto:</label>
        <input type="text" name="asunto" id="asunto" value="compra de producto {{ $prod->nombre}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="mensaje">Mensaje:</label>
        <textarea name="mensaje" id="mensaje" rows="10" class="form-control">
Señor: {{ $datos->nombre}}
En respuesta a su solicitud de compra del producto: {{ $prod->nombre}}
con un costo de: {{ $prod->costo }} $us.
Le hacemos conocer lo siguiente:
---------------------------------------------------------------------------------------------
        </textarea>
    </div>
    <div class="row">
        <div class="col-md-6"><a href="" class="btn btn-success btn-block">Enviar</a></div>
        <div class="col-md-6"><a href="{{route('rs')}}" class="btn btn-danger btn-block">Cancelar</a></div>
    </div>
</form>

@endsection