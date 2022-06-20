<?php

namespace App\Http\Controllers;

use App\Models\Formato;
use App\Http\Requests\StoreFormatoRequest;
use App\Http\Requests\UpdateFormatoRequest;

class FormatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Formato::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFormatoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormatoRequest $request)
    {
        //
        /*$request->validate([
            'referencia' => 'required'
        ]);*/
        return Formato::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formato  $formato
     * @return \Illuminate\Http\Response
     */
    public function show(Formato $formato)
    {
        //
        return Formato::find($formato);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormatoRequest  $request
     * @param  \App\Models\Formato  $formato
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormatoRequest $request, Formato $formato)
    {
        //
        $formato->update($request->all());
        return $formato;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formato  $formato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formato $formato)
    {
        //
         return $formato->delete();
    }
}