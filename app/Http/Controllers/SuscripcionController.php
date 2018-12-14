<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suscripcion;
class SuscripcionController extends Controller
{
    public function index(){
        $dat= Suscripcion::all();
        return view('biowellBolivia.suscripcion.listar', compact('dat'));
    }
    public function indexSuscripcion(){
        
        return view('biowellBolivia.suscripcion.crear');
    }
    public function store(Request $request){
        $datos = new Suscripcion;
        $datos->email = $request->email;
        $datos->save();

      return redirect('/listar-suscripcion')->with('success', 'correcto');
    }
    public function destroy(Suscripcion $id) {
        $id->delete();
        return redirect('/listar-suscripcion')->with('success', 'eliminado');
    
    }
}
