<?php

namespace App\Http\Controllers;

use App\Models\Fis8Category;
use Illuminate\Http\Request;

class Fis8CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Fis8Category::all();
        return view('ReadAdminDataCategories', [
            'cats' => $cats
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CreateAdminDataCategories');
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
            'name' => 'required|min:5|max:50',
         ]);

        //
        Fis8Category::create([
            'name' => $request->name,
            'description' => $request->description,

        ]);
        return redirect(route('cats.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fis8_Category  $fis8_Category
     * @return \Illuminate\Http\Response
     */
    public function show(Fis8Category $fis8_Category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fis8_Category  $fis8_Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Fis8Category $fis8_Category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fis8_Category  $fis8_Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fis8Category $fis8_Category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fis8_Category  $fis8_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Fis8Category::findOrFail($id);
        $cat->delete();
        return redirect(route('cats.index'));
    }
}
