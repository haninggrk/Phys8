<?php

namespace App\Http\Controllers;

use App\Models\Fis8Question;
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
        $questions = Fis8Question::all();
        return view('ReadAdminDataQuestion', [
            'questions' => $questions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CreateQuestion');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'question_text' => 'required|min:5|max:50',
        //  ]);

        //
        Fis8Question::create([
            'question_text' => $request->question_text,
            'is_image_answer' => $request->is_image_answer,
            'discussion' => $request->discussion,
        ]);
        return redirect(route('questions.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fis8Question  $fis8Question
     * @return \Illuminate\Http\Response
     */
    public function show(Fis8Question $fis8Question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fis8Question  $fis8Question
     * @return \Illuminate\Http\Response
     */
    public function edit(Fis8Question $fis8Question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fis8Question  $fis8Question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fis8Question $fis8Question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fis8Question  $fis8Question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quest = Fis8Question::findOrFail($id);
        $quest->delete();
        return redirect(route('questions.index'));
    }
}
