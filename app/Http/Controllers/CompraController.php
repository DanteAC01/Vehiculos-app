<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $compra = Compra::all();
        return view('compras.index', compact('compra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('compras.create');
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
        $compra = new Compra();
        $compra->auto_id = $request->auto_id;
        $compra->user_id = $request->user_id;
        $compra->fecha = $request->fecha;
        $compra->monto = $request->monto;
        $compra->mensaje_id = $request->mensaje_id;
        $compra->save();
        return Redirect::route('compras.index');
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
        $compra = Compra::findOrFail($id);
        return view('compras.edit', compact('compra'));
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
        $compra = Compra::findOrFail($id);
        $compra->auto_id = $request->auto_id;
        $compra->user_id = $request->user_id;
        $compra->fecha = $request->fecha;
        $compra->monto = $request->monto;
        $compra->mensaje_id = $request->mensaje_id;
        $compra->update();
        return Redirect::route('compras.index');
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
        $compra = Compra::findOrFail($id);
        $compra->delete();
        return Redirect::route('compras.index');
    }
}
