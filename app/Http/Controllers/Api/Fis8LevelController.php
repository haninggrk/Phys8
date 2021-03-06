<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Fis8LevelResource;
use App\Models\Fis8Category;
use App\Models\Fis8Level;
use App\Models\User;
use Illuminate\Http\Request;

class Fis8LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Fis8Category::where('name', 'Fast Track')->first();
        $getLevel = $category->levels;

     //   $getUser = User::find(auth()->user()->id);
       // $getUser->logs->create([
         //   'table_name' => 'fis8_levels',
           // 'log_note' => 'Mengambil semua data level',
            //'log_description' => 'Mengambil semua data level melalui table fis8_categories menggunakan relasi levels'
        //]);

        return ['result' => Fis8LevelResource::collection($getLevel)];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        return ['result' => Fis8LevelResource::collection(Fis8Level::where('id', $id)->get())];
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
    }
}
