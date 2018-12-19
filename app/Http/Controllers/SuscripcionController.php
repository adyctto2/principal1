<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suscripcion;
class SuscripcionController extends Controller
{
    public function index(){
        $dat= Suscripcion::where('tipo','=','1')->get();
        return view('biowellBolivia.suscripcion.listar', compact('dat'));
    }
    public function indexSuscripcion(){
        
        return view('biowellBolivia.suscripcion.crear');
    }
    public function store(Request $request){
        $datos = new Suscripcion;
        $datos->email = $request->email;
        $datos->tipo = '1';
        $datos->save();

      return redirect('/listar-suscripcion')->with('success', 'correcto');
    }
    public function destroy(Suscripcion $id) {
        $id->delete();
        return redirect('/listar-suscripcion')->with('success', 'eliminado');
    
    }
}
