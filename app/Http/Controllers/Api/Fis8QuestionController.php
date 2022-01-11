<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Fis8QuestionResource;
use App\Models\Fis8Level;
use App\Models\Fis8Question;
use App\Models\User;
use Illuminate\Http\Request;

class Fis8QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getQuestion = Fis8Question::all();

       // $getUser = User::find(auth()->user()->id);
        //$getUser->logs->create([
          //  'table_name' => 'fis8_questions',
            //'log_note' => 'Mengambil semua data pertanyaan',
            //'log_description' => 'Mengambil semua data pertanyaan melalui table fis8_questions dan menggunakan
            // relasi level, answerOptions, dan gamePlayHistories'
        //]);

        return ['result' => Fis8QuestionResource::collection($getQuestion)];
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
    public function show($id) //getquestionwithlevelid
    {
       // $getUser = User::find(auth()->user()->id);
        //$getUser->logs->create([
          //  'table_name' => 'fis8_questions',
            //'log_note' => 'Mengambil semua data pertanyaan',
            //'log_description' => 'Mengambil semua data pertanyaan melalui table fis8_levels dan menggunakan
             //relasi level, answerOptions, dan gamePlayHistories'
        //]);
        return ['result' => Fis8QuestionResource::collection(Fis8Level::find($id)->questions)];
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
