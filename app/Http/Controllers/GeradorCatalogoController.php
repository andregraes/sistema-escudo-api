<?php

namespace App\Http\Controllers;

use App\Models\GeradorCatalogo;
use App\Http\Requests\StoreGeradorCatalogoRequest;
use App\Http\Requests\UpdateGeradorCatalogoRequest;

class GeradorCatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return GeradorCatalogo::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGeradorCatalogoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGeradorCatalogoRequest $request)
    {
        //
        /*$request->validate([
            'referencia' => 'required'
        ]);*/
        return GeradorCatalogo::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GeradorCatalogo  $GeradorCatalogo
     * @return \Illuminate\Http\Response
     */
    public function show(GeradorCatalogo $geradorCatalogo)
    {
        //
        return GeradorCatalogo::find($geradorCatalogo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGeradorCatalogoRequest  $request
     * @param  \App\Models\GeradorCatalogo  $geradorCatalogo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGeradorCatalogoRequest $request, GeradorCatalogo $geradorCatalogo)
    {
        //
        $geradorCatalogo->update($request->all());
        return $geradorCatalogo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GeradorCatalogo  $geradorCatalogo
     * @return \Illuminate\Http\Response
     */
    public function destroy(GeradorCatalogo $geradorCatalogo)
    {
        //
        return $geradorCatalogo->delete();
    }
}
