<?php

namespace App\Http\Controllers;

use App\Models\ConteudoProgramatico;
use App\Http\Requests\StoreConteudoProgramaticoRequest;
use App\Http\Requests\UpdateConteudoProgramaticoRequest;
use App\Models\Curso;
use Illuminate\Http\Request;

class ConteudoProgramaticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return ConteudoProgramatico::all();
    }

    public function create()
    {
        $cursos = Curso::all();
        $conteudo = ConteudoProgramatico::all();
        return view('cpform', ['cursos' => $cursos, 'conteudos' => $conteudo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreConteudoProgramaticoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConteudoProgramaticoRequest $request)
    {
        //dd($request);

        //
        /*$request->validate([
            'referencia' => 'required'
        ]);*/
        return ConteudoProgramatico::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConteudoProgramatico  $conteudoProgramatico
     * @return \Illuminate\Http\Response
     */
    public function show(ConteudoProgramatico $conteudoProgramatico)
    {
        //
        return ConteudoProgramatico::find($conteudoProgramatico);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConteudoProgramaticoRequest  $request
     * @param  \App\Models\ConteudoProgramatico  $conteudoProgramatico
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConteudoProgramaticoRequest $request, ConteudoProgramatico $conteudoProgramatico)
    {
        //
        $conteudoProgramatico->update($request->all());
        return $conteudoProgramatico;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConteudoProgramatico  $conteudoProgramatico
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConteudoProgramatico $conteudoProgramatico)
    {
        //
        return $conteudoProgramatico->delete();
    }
    public function cadastrarTopicos(Request $request)
    {
        $pieces = explode(",", $request->topicos);
        $curso = $request->curso;
        foreach ($pieces as $item) {
            ConteudoProgramatico::create([
                'descricao' => $item,
                'fk_idconteudo_programatico' => 0,
                'fk_idcurso' => $curso
            ]);
        }
        return $pieces;
    }
}
