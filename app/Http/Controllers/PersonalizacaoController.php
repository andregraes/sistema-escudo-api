<?php

namespace App\Http\Controllers;

use App\Models\Personalizacao;
use App\Http\Requests\StorePersonalizacaoRequest;
use App\Http\Requests\UpdatePersonalizacaoRequest;

class PersonalizacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Personalizacao::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePersonalizacaoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonalizacaoRequest $request)
    {
        //
        /*$request->validate([
            'referencia' => 'required'
        ]);*/
        return Personalizacao::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personalizacao  $personalizacao
     * @return \Illuminate\Http\Response
     */
    public function show(Personalizacao $personalizacao)
    {
        //
        return Personalizacao::find($personalizacao);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonalizacaoRequest  $request
     * @param  \App\Models\Personalizacao  $personalizacao
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonalizacaoRequest $request, Personalizacao $personalizacao)
    {
        //
        $personalizacao->update($request->all());
        return $personalizacao;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personalizacao  $personalizacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personalizacao $personalizacao)
    {
        //
         return $personalizacao->delete();
    }
}
