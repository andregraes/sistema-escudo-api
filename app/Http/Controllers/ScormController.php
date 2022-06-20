<?php

namespace App\Http\Controllers;

use App\Models\Scorm;
use App\Http\Requests\StoreScormRequest;
use App\Http\Requests\UpdateScormRequest;

class ScormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Scorm::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreScormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreScormRequest $request)
    {
        //
        /*$request->validate([
            'referencia' => 'required'
        ]);*/
        return Scorm::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Scorm  $scorm
     * @return \Illuminate\Http\Response
     */
    public function show(Scorm $scorm)
    {
        //
        return Scorm::find($scorm);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateScormRequest  $request
     * @param  \App\Models\Scorm  $scorm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScormRequest $request, Scorm $scorm)
    {
        //
        $scorm->update($request->all());
        return $scorm;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scorm  $scorm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scorm $scorm)
    {
        //
         return $scorm->delete();
    }
}
