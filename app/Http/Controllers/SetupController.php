<?php

namespace App\Http\Controllers;

use App\Models\Setup;
use App\Http\Requests\StoreSetupRequest;
use App\Http\Requests\UpdateSetupRequest;

class SetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Setup::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSetupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSetupRequest $request)
    {
        //
        /*$request->validate([
            'referencia' => 'required'
        ]);*/
        return Setup::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setup  $setup
     * @return \Illuminate\Http\Response
     */
    public function show(Setup $setup)
    {
        //
        return Setup::find($setup);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSetupRequest  $request
     * @param  \App\Models\Setup  $setup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSetupRequest $request, Setup $setup)
    {
        //
        $setup->update($request->all());
        return $setup;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setup  $setup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setup $setup)
    {
        //
         return $setup->delete();
    }
}
