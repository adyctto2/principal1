<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
class ProductoController extends Controller
{
    public function index(){
        $dat= Productos::all();
        return view('biowellBolivia.productos.listar', compact('dat'));
    }
    public function indexProducto(){
        
        return view('biowellBolivia.productos.crear');
    }
    public function store(Request $request){
      if($request->hasfile('imagen'))
        {
          $file = $request->file('imagen');
          $name=time().$file->getClientOriginalName();
          $file->move(public_path().'/img/producto/', $name);
        }
        $imagen = $_SERVER["HTTP_HOST"]."/img/producto/".$name;
        $productos = new Productos;
        $productos->nombre = $request->nombre;
        $productos->costo = $request->costo;
        $productos->descripcion = $request->descripcion;
        $productos->tecnologia = $request->tecnologia;
        $productos->caracteristicas = $request->caracteristicas;
        $productos->beneficios = $request->beneficios;
        $productos->especificaciones = $request->especificaciones;
        $productos->soporte = $request->soporte;
        $productos->imagen = $imagen;
        $productos->save();

      return redirect('/listar')->with('success', 'correcto');
    }
    public function destroy(Productos $id) {
        $id->delete();
        return redirect('/listar')->with('success', 'eliminado');
    
    }
    public function verProducto(Productos $id){
      $datos = $id;
      return view('biowellBolivia.productos.ver', compact('datos'));
    }
    public function edit(Productos $id){
      
      return view('biowellBolivia.productos.editar', compact('id'));
    }
    public function actualizar(Request $datos){
      $dt = Productos::where('id','=',$datos->id)->first();
      
      if(count($dt)>=1){
        $name = '';
        if($datos->hasfile('imagen'))
          {
            $file = $request->file('imagen');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/img/producto/', $name);
            $name = $_SERVER["HTTP_HOST"]."/img/producto/".$name;
          }
          else{
            $name = $dt->imagen;
          }
        $dt->nombre = $datos->nombre;
        $dt->costo = $datos->costo;
        $dt->descripcion = $datos->descripcion;
        $dt->tecnologia = $datos->tecnologia;
        $dt->caracteristicas = $datos->caracteristicas;
        $dt->beneficios = $datos->beneficios;
        $dt->especificaciones = $datos->especificaciones;
        $dt->soporte = $datos->soporte;
        $dt->imagen = $name;
        $dt->save();
        return redirect('/listar')->with('success', 'actualizado');
      }
    }
}
