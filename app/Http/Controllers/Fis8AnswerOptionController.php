<?php

namespace App\Http\Controllers;

use App\Models\Fis8AnswerOption;
use App\Models\Fis8Question;
use Illuminate\Http\Request;

class Fis8AnswerOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opttxts = Fis8AnswerOption::all();
        $q = Fis8Question::all();

        return view('ReadAdminDataAnsOptText', [
            'question' => $q,
            'opttxts' => $opttxts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CreateAnswerOptionText');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Fis8AnswerOption::create([
            'answer_option_text' => $request->answer_option_text,

        ]);
        return redirect(route('opttxts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Fis8AnswerOption $fis8AnswerOption)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Fis8AnswerOption $fis8AnswerOption)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fis8AnswerOption $fis8AnswerOption)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quest = Fis8AnswerOption::findOrFail($id);
        $quest->delete();
        return redirect(route('opttxts.index'));
    }
}
