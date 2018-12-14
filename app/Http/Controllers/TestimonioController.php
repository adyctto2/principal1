<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonio;
use DateTime;
class TestimonioController extends Controller
{
    public function index(){
        $dat= Testimonio::all();
        return view('biowellBolivia.testimonios.listar', compact('dat'));
    }
    public function indexTestimonio(){
        
        return view('biowellBolivia.testimonios.crear');
    }
    public function store(Request $request){
      if($request->hasfile('imagen'))
        {
          $file = $request->file('imagen');
          $name=time().$file->getClientOriginalName();
          $file->move(public_path().'/img/testimonios/', $name);
        }
        $dta = new DateTime();
        $dt=$dta->format('Y-m-d');
        $imagen = $_SERVER["HTTP_HOST"]."/img/testimonios/".$name;
        $productos = new Testimonio;
        $productos->nombre = $request->nombre;
        $productos->profesion = $request->profesion;
        $productos->testimonio = $request->testimonio;
        $productos->id_producto = $request->id_producto;
        $productos->imagen = $imagen;
        $productos->fecha = $dt;
        $productos->save();

      return redirect('/listar-testimonio')->with('success', 'correcto');
    }
    public function destroy(Testimonio $id) {
        $id->delete();
        return redirect('/listar-testimonio')->with('success', 'eliminado');
    
    }
    public function verProducto(Testimonio $id){
      $datos = $id;
      return view('biowellBolivia.testimonios.ver', compact('datos'));
    }
    public function edit(Testimonio $id){
      
      return view('biowellBolivia.testimonios.editar', compact('id'));
    }
    public function actualizar(Request $datos){
      $dt = Testimonio::where('id','=',$datos->id)->first();
      
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
        $dta = new DateTime();
        $dts=$dta->format('Y-m-d');
        $dt->nombre = $datos->nombre;
        $dt->profesion = $datos->profesion;
        $dt->testimonio = $datos->testimonio;
        $dt->id_producto = $datos->id_producto;
        $dt->imagen = $name;
        $dt->fecha = $dts;
        $dt->save();
        return redirect('/listar-testimonio')->with('success', 'actualizado');
      }
    }
}
