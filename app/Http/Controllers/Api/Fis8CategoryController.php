<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Fis8CategoryResource;
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
        $categories = Fis8Category::all();

        return ['result' => Fis8CategoryResource::collection($categories)];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Fis8Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response([
            'status' => 'Kategori berhasil ditambahkan',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ['result' => Fis8CategoryResource::collection(Fis8Category::where('id', $id)->get())];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Fis8Category::findOrFail($id);

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response([
            'status' => 'Kategori berhasil diubah',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Fis8Category::findOrFail($id);
        $category->delete();

        return response([
            'status' => 'Kategori berhasil dihapus',
        ]);
    }
}
