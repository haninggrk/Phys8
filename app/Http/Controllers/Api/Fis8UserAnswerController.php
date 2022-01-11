<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fis8GamePlayHistory;
use App\Models\User;
use Illuminate\Http\Request;

class Fis8UserAnswerController extends Controller
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
        $history = Fis8GamePlayHistory::find($request->quiz_history_id);

        $history->questions()->attach([
            $request->question_id => [
                'user_answer' => $request->user_answer,
            ],
        ]);
       // $getUser = User::find(auth()->user()->id);
        //$getUser->logs->create([
          //  'table_name' => 'fis8_user_answers',
            //'log_note' => 'Memasukkan jawaban user id = '.$getUser->id,
            //'log_description' => 'Memasukkan jawaban user id = '.$getUser->id.' dengan mencari histori user terlebih dahulu yang bersangkutan',
            //'log_path' => $request->path(),
            //'log_ip' => $request->ip()
        //]);
        return response([
            'message' => 'true',
        ]);
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
