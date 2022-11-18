<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FotoController extends Controller
{
    //
    public function index(){
        $fotos= Foto::all();
        return view('fotos.index', compact('fotos'));
    }

    //
    public function create(){
        return view('fotos.create');
    }

    //
    public function store(Request $request){
       $foto= new Foto();
       $foto->url=$request->url;
       $foto->auto_id=$request->auto_id;
       $foto->save();
       return Redirect::to('fotos');
    }

    //
    public function edit($id){
        $foto=Foto::findOrfail($id);
        return view('fotos.edit', compact('fotos'));

    }

    //
    public function update($id, Request $request){
        $foto=Foto::findOrfail($id);
        $foto->url=$request->url;
        $foto->auto_id=$request->auto_id;
        $foto->update();
      return Redirect::to('fotos');
    }

    //
    public function delete($id){
        $foto=Foto::findOrfail($id);
        $foto->delete();
        return Redirect::to('fotos');

    }
}
