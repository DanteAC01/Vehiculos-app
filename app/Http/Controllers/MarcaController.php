<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MarcaController extends Controller
{
    //
    public function index(){
        $marcas=Marca::all();
        return view('marcas.index', compact('marcas'));
    }
    //
    public function create(){
        return view('marcas.create');
    }
    //
    public function store(Request $request){
        $marca= new Marca();
        $marca->nombre=$request->nombre;
        $marca->save();
        return Redirect::to('marcas');
    }
    //
    public function edit($id){
        $marca=Marca::FindOrfail($id);
        return view('marcas.edit', compact('fotos'));

    }
    //
    public function update($id, Request $request){
        $marca= Marca::FindOrfail($id);
        $marca->nombre=$request->nombre;
        $marca->update();
        return Redirect::to('marcas');

    }
    //
    public function delete($id){
        $marca=Marca::FindOrfail($id);
        $marca->delete();
        return Redirect::to('marcas');

    }

}
