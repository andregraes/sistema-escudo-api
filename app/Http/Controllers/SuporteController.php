<?php

namespace App\Http\Controllers;

use App\Models\Suporte;
use App\Http\Requests\StoreSuporteRequest;
use App\Http\Requests\UpdateSuporteRequest;

class SuporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Suporte::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSuporteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSuporteRequest $request)
    {
        //
        /*$request->validate([
            'referencia' => 'required'
        ]);*/
        return Suporte::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suporte  $suporte
     * @return \Illuminate\Http\Response
     */
    public function show(Suporte $suporte)
    {
        //
        return Suporte::find($suporte);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSuporteRequest  $request
     * @param  \App\Models\Suporte  $suporte
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSuporteRequest $request, Suporte $suporte)
    {
        //
        $suporte->update($request->all());
        return $suporte;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suporte  $suporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suporte $suporte)
    {
        //
         return $suporte->delete();
    }
}
