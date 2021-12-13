<?php

namespace App\Http\Controllers;

use App\Models\Fis8AnswerOptionImage;
use App\Models\Fis8Image;
use App\Models\Fis8Question;
use App\Models\Fis8QuestionImage;
use Illuminate\Http\Request;

class Fis8QuestionImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qimgs = Fis8QuestionImage::all();
        return view('ReadAdminDataQuestionImage', [
            'qimgs' => $qimgs
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
        $answer = Fis8Image::all();
        return view('CreateQuestionImage', compact("question", "answer"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = Fis8Question::find($request -> fis8_image_id);

                $question->images()->attach([
                    $request -> fis8_image_id => ['fis8_question_id' => $request->fis8_question_id],
            ]);

        return redirect(route('qimgs.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fis8QuestionImage  $fis8QuestionImage
     * @return \Illuminate\Http\Response
     */
    public function show(Fis8QuestionImage $fis8QuestionImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fis8QuestionImage  $fis8QuestionImage
     * @return \Illuminate\Http\Response
     */
    public function edit(Fis8QuestionImage $fis8QuestionImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fis8QuestionImage  $fis8QuestionImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fis8QuestionImage $fis8QuestionImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fis8QuestionImage  $fis8QuestionImage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $qimgs = Fis8QuestionImage::findOrFail($id);
        $qimgs->delete();
        return redirect(route('qimgs.index'));
    }
}
