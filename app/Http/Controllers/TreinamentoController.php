<?php

namespace App\Http\Controllers;

use App\Models\Treinamento;
use App\Http\Requests\StoreTreinamentoRequest;
use App\Http\Requests\UpdateTreinamentoRequest;

class TreinamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Treinamento::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTreinamentoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTreinamentoRequest $request)
    {
        //
        /*$request->validate([
            'referencia' => 'required'
        ]);*/
        return Treinamento::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Treinamento  $treinamento
     * @return \Illuminate\Http\Response
     */
    public function show(Treinamento $treinamento)
    {
        //
        return Treinamento::find($treinamento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTreinamentoRequest  $request
     * @param  \App\Models\Treinamento  $treinamento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTreinamentoRequest $request, Treinamento $treinamento)
    {
        //
        $treinamento->update($request->all());
        return $treinamento;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treinamento  $treinamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treinamento $treinamento)
    {
        //
         return $treinamento->delete();
    }
}