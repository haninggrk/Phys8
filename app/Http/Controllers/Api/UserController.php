<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Fis8UserResource;
use App\Models\Fis8Log;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //if(auth()->user()){
       
        //   Fis8Log::create([
          //  'student_id' => auth()->user()->id,
            //    'table_name' => 'students',
              //  'log_note' => 'Mengambil semua data user',
            //]);
      //  }
        return ['result' => Fis8UserResource::collection(User::all())];
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
        if (count(User::where('id', $id)->get()) > 0) {

           
           // Fis8Log::create([
             //   'student_id' => auth()->user()->id,
               // 'table_name' => 'students',
                //'log_note' => 'Mencari user id = '.$id,
            //]);

            return [
                'status' => 'resultOn',
                'result' => Fis8UserResource::collection(User::where('id', $id)->get()),
            ];
        } else {
            return response([
                'status' => 'Mohon maaf, sistem sedang erorr',
                'result' => null,
            ]);
        }
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
