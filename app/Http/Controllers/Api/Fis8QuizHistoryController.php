<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fis8GamePlayHistory;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\Fis8GamePlayHistoryResource;
use App\Models\Fis8Level;

class Fis8QuizHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getUser = User::find($request->student_id);
       // $getUserr = User::find(auth()->user()->id);

        //$getUserr->logs->create([
          //  'table_name' => 'students',
            //'log_note' => 'Mencari data user di table student dengan id '.$getUser->id,
            //'log_path' => $request->path(),
            //'log_ip' => $request->ip()
        //]);

        $getLevel = Fis8Level::find($request->fis8_level_id);

      //  $getUserr->logs->create([
        //    'table_name' => 'fis8_game_play_histories',
          //  'log_note' => 'Mencari data level di table fis8_levels dengan id '.$getLevel->id,
            //'log_path' => $request->path(),
            //'log_ip' => $request->ip()
        //]);

        $createHistory = $getUser->levels()->attach(
            $getLevel->id);

          
          //  $getUserr->logs->create([
            //    'table_name' => 'fis8_game_play_histories',
              //  'log_note' => 'Memasukkan data histori user id = '.$getUser->id,
                //'log_path' => $request->path(),
                //'log_ip' => $request->ip()
            //]);

        return ['result' => Fis8GamePlayHistoryResource::collection(Fis8GamePlayHistory::all())];
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
      //  $getUser = User::find(auth()->user()->id);
        //$getUser->logs->create([
          //  'table_name' => 'fis8_game_play_histories',
            //'log_note' => 'Mengambil semua data histori yang dimiliki oleh user dengan id '.auth()->user()->id,
            //'log_description' => 'Mengambil semua data histori yang dimiliki oleh user dengan id '.auth()->user()->id. ' melalui
            //table fis8_game_play_histories dan menggunakan relasi student, dan questions'
        //]);
        return ['result' => Fis8GamePlayHistoryResource::collection(Fis8GamePlayHistory::where('id', $id)->get())];
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
