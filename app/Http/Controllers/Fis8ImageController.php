<?php

namespace App\Http\Controllers;

use App\Models\Fis8Image;
use Illuminate\Http\Request;

class Fis8ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Fis8Image::all();
        return view('ReadAdminDataImage', [
            'images' => $images
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CreateImage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Fis8Image::create([
            'image' => $request->image,
        ]);
        return redirect(route('images.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fis8Image  $fis8Image
     * @return \Illuminate\Http\Response
     */
    public function show(Fis8Image $fis8Image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fis8Image  $fis8Image
     * @return \Illuminate\Http\Response
     */
    public function edit(Fis8Image $fis8Image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fis8Image  $fis8Image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fis8Image $fis8Image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fis8Image  $fis8Image
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quest = Fis8Image::findOrFail($id);
        $quest->delete();
        return redirect(route('images.index'));
    }
}
