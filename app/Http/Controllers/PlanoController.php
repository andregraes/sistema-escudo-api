<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use App\Http\Requests\StorePlanoRequest;
use App\Http\Requests\UpdatePlanoRequest;

class PlanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Plano::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlanoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlanoRequest $request)
    {
        //
        /*$request->validate([
            'referencia' => 'required'
        ]);*/
        return Plano::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plano  $plano
     * @return \Illuminate\Http\Response
     */
    public function show(Plano $plano)
    {
        //
        return Plano::find($plano);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlanoRequest  $request
     * @param  \App\Models\Plano  $plano
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlanoRequest $request, Plano $plano)
    {
        //
        $plano->update($request->all());
        return $plano;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plano  $plano
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plano $plano)
    {
        //
         return $plano->delete();
    }
}
