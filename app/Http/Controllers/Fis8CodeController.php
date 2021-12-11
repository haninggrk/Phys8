<?php

namespace App\Http\Controllers;

use App\Models\Fis8Code;
use Illuminate\Http\Request;

class Fis8CodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codes = Fis8Code::all();
        return view('ReadAdminDataCodes', [
            'codes' => $codes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CreateCodes');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'code' => 'required|max:100',
         ]);

        //
        Fis8Code::create([
            'code' => $request->code,
        ]);
        return redirect(route('codes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fis8Code  $fis8Code
     * @return \Illuminate\Http\Response
     */
    public function show(Fis8Code $fis8Code)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fis8Code  $fis8Code
     * @return \Illuminate\Http\Response
     */
    public function edit(Fis8Code $fis8Code)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fis8Code  $fis8Code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fis8Code $fis8Code)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fis8Code  $fis8Code
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $code = Fis8Code::findOrFail($id);
        $code->delete();
        return redirect(route('codes.index'));
    }
}
