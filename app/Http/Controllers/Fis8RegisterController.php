<?php

namespace App\Http\Controllers;

use App\Models\Fis8Log;
use Illuminate\Http\Request;

class Fis8LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fis8Log  $fis8Log
     * @return \Illuminate\Http\Response
     */
    public function show(Fis8Log $fis8Log)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fis8Log  $fis8Log
     * @return \Illuminate\Http\Response
     */
    public function edit(Fis8Log $fis8Log)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fis8Log  $fis8Log
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fis8Log $fis8Log)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fis8Log  $fis8Log
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fis8Log $fis8Log)
    {
        //
    }
}
