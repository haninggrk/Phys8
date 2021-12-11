<?php

namespace App\Http\Controllers;

use App\Models\Fis8AnswerOptionText;
use App\Models\Fis8Question;
use App\Models\Fis8QuestionAnswerText;
use Illuminate\Http\Request;

class Fis8QuestionAnswerTextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qatxts = Fis8QuestionAnswerText::all();
        return view('ReadQuestionAnswerText', [
            'qatxts' => $qatxts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $question = Fis8Question::all();
        $answer = Fis8AnswerOptionText::all();
        return view('CreateQuestionAnswerText', compact("question", "answer"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //
        // $question = Fis8Question::find($request -> fis8_question_id);
        // $answer = Fis8AnswerOptionText::find($request -> fis8_answer_option_text_id);
        // $question -> levels() -> create([

        //     'is_correct_answer' => $request->name

        // ]);

        $question = Fis8Question::find($request -> fis8_question_id);

            $question->answerOptionTexts()->attach([
                $request -> fis8_answer_option_text_id => ['is_correct_answer' => $request->is_correct_answer],
            ]);

        return redirect(route('qatxts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fis8QuestionAnswerText  $fis8QuestionAnswerText
     * @return \Illuminate\Http\Response
     */
    public function show(Fis8QuestionAnswerText $fis8QuestionAnswerText)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fis8QuestionAnswerText  $fis8QuestionAnswerText
     * @return \Illuminate\Http\Response
     */
    public function edit(Fis8QuestionAnswerText $fis8QuestionAnswerText)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fis8QuestionAnswerText  $fis8QuestionAnswerText
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fis8QuestionAnswerText $fis8QuestionAnswerText)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fis8QuestionAnswerText  $fis8QuestionAnswerText
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $qatxts = Fis8QuestionAnswerText::findOrFail($id);
        $qatxts->delete();
        return redirect(route('qatxts.index'));
    }
}
