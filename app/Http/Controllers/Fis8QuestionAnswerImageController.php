<?php

namespace App\Http\Controllers;

use App\Models\Fis8Image;
use App\Models\Fis8Question;
use App\Models\Fis8QuestionAnswerImage;
use App\Models\Fis8QuestionImage;
use Illuminate\Http\Request;

class Fis8QuestionAnswerImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qansimgs = Fis8QuestionAnswerImage::all();
        $question = Fis8Question::all();
        return view('ReadAdminDataQuestionAnsImage', [
            'question' => $question,
            'qansimgs' => $qansimgs
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
        $image = Fis8Image::all();
        return view('CreateAnswerImage', compact("question", "image"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = Fis8Question::find($request -> fis8_question_id);

            $question->imageQuestionAnswerImages()->attach([
                $request -> fis8_image_id => ['is_correct_answer' => $request->is_correct_answer],
            ]);

        return redirect(route('qansimgs.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fis8QuestionAnswerImage  $fis8QuestionAnswerImage
     * @return \Illuminate\Http\Response
     */
    public function show(Fis8QuestionAnswerImage $fis8QuestionAnswerImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fis8QuestionAnswerImage  $fis8QuestionAnswerImage
     * @return \Illuminate\Http\Response
     */
    public function edit(Fis8QuestionAnswerImage $fis8QuestionAnswerImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fis8QuestionAnswerImage  $fis8QuestionAnswerImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fis8QuestionAnswerImage $fis8QuestionAnswerImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fis8QuestionAnswerImage  $fis8QuestionAnswerImage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $qansimgs = Fis8QuestionAnswerImage::findOrFail($id);
        $qansimgs->delete();
        return redirect(route('qansimgs.index'));
    }
}
