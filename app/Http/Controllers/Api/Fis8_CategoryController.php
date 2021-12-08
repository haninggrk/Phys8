<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Fis8_categoriesResource;
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

        return ['category' => Fis8_categoriesResource::collection($categories)];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Fis8Category::create([
            'name' => $request->name,
        ]);

        return [
            'message' => 'Category has been saved!',
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ['category' => Fis8_categoriesResource::collection(Fis8Category::all()->where('id', $id))];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Fis8Category::findOrFail($id);

        $category->update([
            'name' => $request->name,
        ]);

        return [
            'message' => 'Category has been updated!',
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Fis8Category::findOrFail($id);
        $category->delete();

        return [
            'message' => 'Category has been deleted!',
        ];
    }
}
