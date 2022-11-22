<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $autos= Auto::all();
        return view('autos.index', compact('autos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('autos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $auto = new Auto();
        $auto->id = $request->id;
        $auto->marca_id = $request->marca_id;
        $auto->modelo = $request->modelo;
        $auto->estado = $request->estado;
        $auto->precio = $request->precio;
        $auto->kilometraje = $request->kilometraje;
        $auto->user_id = $request->user_id;
        $auto->descripcion = $request->descripcion;
        $auto->save();
        return Redirect::route('autos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $auto= Auto::findOrFail($id);
        return view('autos.edit', compact('auto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $auto = Auto::finOrFaild($id);
        $auto->id = $request->id;
        $auto->marca_id = $request->marca_id;
        $auto->modelo = $request->modelo;
        $auto->estado = $request->estado;
        $auto->precio = $request->precio;
        $auto->kilometraje = $request->kilometraje;
        $auto->user_id = $request->user_id;
        $auto->descripcion = $request->descripcion;
        $auto->update();
        return Redirect::route('autos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $auto = Auto::findOrFaild($id);
        $auto->delete();
        return Redirect::route('autos.index');
    }
}
