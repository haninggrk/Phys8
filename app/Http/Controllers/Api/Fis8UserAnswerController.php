<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fis8GamePlayHistory;
use App\Models\Fis8Log;
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

        Fis8Log::create([
            'student_id' => $request->user_id,
            'table_name' => 'fis8_user_answers',
            'log_note' => 'Pemain memilih jawaban',
            'log_description' => 'Memasukkan jawaban dari id pemain = '.$request->user_id.' dengan id riwayat = '.$history->id,
            'log_path' => $request->path(),
            'log_ip' => $request->ip(),
        ]);

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
