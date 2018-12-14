@extends('layouts.biowell')
@section('contenidoBiowell')
<h1>Actualizar producto</h1>
    <form action="{{route('act')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="nombre">Nombre del producto</label>
            <input type="text" class="form-control" placeholder="Nombre del producto" required name="nombre" id="nombre" value="{{ $id->nombre}}">
        </div>
        <div class="form-group">
            <label for="costo">Costo del producto</label>
            <input type="number" class="form-control" placeholder="Costo del producto" required name="costo" id="costo" value="{{ $id->costo}}">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" id="descripcion" rows="3" class="form-control" placeholder="Descripcion del producto" >{{ $id->descripcion}}</textarea>
         </div>
         <div class="form-group">
             <label for="tecnologia">Tecnologia</label>
             <textarea name="tecnologia" id="tecnologia" rows="3" class="form-control" placeholder="Tecnologia del producto">{{ $id->tecnologia}}</textarea>
          </div>
          <div class="form-group">
              <label for="caracteristicas">Caracteristicas</label>
              <textarea name="caracteristicas" id="caracteristicas" rows="3" class="form-control" placeholder="Caracteristicas del producto">{{ $id->caracteristicas}}</textarea>
           </div>
           <div class="form-group">
               <label for="beneficios">Beneficios</label>
               <textarea name="beneficios" id="beneficios" rows="3" class="form-control" placeholder="Beneficios del producto">{{ $id->beneficios}}</textarea>
            </div>
            <div class="form-group">
                <label for="especificaciones">Especificaciones</label>
                <textarea name="especificaciones" id="especificaciones" rows="3" class="form-control" placeholder="Especificaciones del producto">{{ $id->especificaciones}}</textarea>
             </div>
             <div class="form-group">
                 <label for="soporte">Soporte</label>
                 <textarea name="soporte" id="soporte" rows="3" class="form-control" placeholder="Soporte del producto">{{ $id->soporte}}</textarea>
              </div>
              <div class="form-group">
                  <label for="imagen">Imagen del producto</label>
                  <input type="file" name="imagen" id="imagen" placeholder="Imagen del producto" accept="image/*" >
              </div>
              <div class="form-group">
                  <label for="imagen">No modificar este numero</label>
                <input type="text" name="id" value="{{$id->id}}"> 
                </div>
              <div class="form-group">
                  <div class="row">
                      <div class="col-md-6">
                          <input type="submit" value="Guardar Producto" name="guardar" class="btn btn-primary btn-block">

                      </div>
                      <div class="col-md-6">
                          <a href="{{route('listar')}}" class="btn btn-danger btn-block">Cancelar</a>

                      </div>
                  </div>
              </div>
    </form>
@endsection