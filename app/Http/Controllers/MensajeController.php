<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mensaje;
class MensajeController extends Controller
{
    public function index(){
        $datos = Mensaje::where('tipo','=','1')->get();
        return view('biowellBolivia.mensajes.listar',compact('datos'));
    }
    public function ver(Mensaje $id){
        $datos = $id;
        $datos->estado = '1';
        $datos->save();
        return view('biowellBolivia.mensajes.ver', compact('datos'));
    }
    public function enviarcorreo(Mensaje $id){
        $datos = $id;
        return view('biowellBolivia.mensajes.correo', compact('datos'));

    }
}
