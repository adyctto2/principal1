<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function index(){
        $dat = Category::all();
        return view('biowellBolivia.preguntas.categoria.listar',compact('dat'));
    }
    public function indexCategoria(){
        return view('biowellBolivia.preguntas.categoria.crear');
    }
    public function destroy(Category $id){
        $id->delete();
        return redirect('/listar-categorias')->with('success', 'eliminado');
    }
    public function edit(Category $id){
        return view('biowellBolivia.preguntas.categoria.editar', compact('id'));
    }
    public function actualizar(Request $datos){
        $dt = Category::where('id','=',$datos->id)->first();
        if(count($dt)>=1){
            $dt->nombre_cat = $datos->nombre_cat;
            $dt->save();
            return redirect('/listar-categorias')->with('success', 'actualizado');
        }
    }
    public function store(Request $request){
        $productos = new Category;
        $productos->nombre_cat = $request->nombre_cat;
        $productos->save();
        return redirect('/listar-categorias')->with('success', 'creado');
    }
}
