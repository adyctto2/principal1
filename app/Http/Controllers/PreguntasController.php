<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preguntas;
class PreguntasController extends Controller
{
    public function index(){
        $dat = Preguntas::all();
        return view('biowellBolivia.preguntas.preguntas.listar',compact('dat'));
    }
    public function indexPregunta(){
        return view('biowellBolivia.preguntas.preguntas.crear');
    }
    public function destroy(Preguntas $id){
        $id->delete();
        return redirect('/listar-preguntas')->with('success', 'eliminado');
    }
    public function edit(Preguntas $id){
        return view('biowellBolivia.preguntas.preguntas.editar', compact('id'));
    }
    public function actualizar(Request $datos){
        $dt = Preguntas::where('id','=',$datos->id)->first();
        if(count($dt)>=1){
            $dt->pregunta = $datos->pregunta;
            $dt->respuesta = $datos->respuesta;
            $dt->id_categoria = $datos->id_categoria;
            $dt->save();
            return redirect('/listar-preguntas')->with('success', 'actualizado');
        }
    }
    public function store(Request $request){
        $productos = new Preguntas;
        $productos->pregunta = $request->pregunta;
        $productos->respuesta = $request->respuesta;
        $productos->id_categoria = $request->id_categoria;
        $productos->save();
        return redirect('/listar-preguntas')->with('success', 'creado');
    }
}
