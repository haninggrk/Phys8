<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Fis8MyUserResource;
use App\Models\Fis8MyUser;
use App\Models\User;
use Illuminate\Http\Request;

class Fis8MyUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function rank()
    {
      //  $getUser = User::find(auth()->user()->id);
        //$getUser->logs->create([
          //  'table_name' => 'fis8_myusers',
            //'log_note' => 'Mengambil semua data peringkat',
            //'log_description' => 'Mengambil semua data peringkat melalui table fis8_myusers menggunakan relasi student. Mengambil 10 data teratas yang mempunyai skor tertinggi'
        //]);
        return ['result' => Fis8MyUserResource::collection(Fis8MyUser::orderBy('score', 'DESC')->with('student')->limit(10)->get())];
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
