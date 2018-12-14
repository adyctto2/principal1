<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
use App\Productos;
class ReservaController extends Controller
{
    public function index(){
        $datos = Reserva::all();
        return view('biowellBolivia.reserva.listar',compact('datos'));
    }
    public function ver(Reserva $id){
        $datos = $id;
        $datos->estado = '1';
        $datos->save();
        $prod = Productos::where('id','=',$datos->id_producto)->first();
        return view('biowellBolivia.reserva.ver', compact('datos', 'prod'));
    }
    public function enviarcorreo(Reserva $id){
        $datos = $id;
        $prod = Productos::where('id','=',$datos->id_producto)->first();
        return view('biowellBolivia.reserva.correo', compact('datos', 'prod'));

    }
}
