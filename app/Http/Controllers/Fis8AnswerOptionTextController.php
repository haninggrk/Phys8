<?php

namespace App\Http\Controllers;

use App\Models\Fis8AnswerOptionText;
use Illuminate\Http\Request;

class Fis8AnswerOptionTextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opttxts = Fis8AnswerOptionText::all();
        return view('ReadAdminDataAnsOptText', [
            'opttxts' => $opttxts
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Fis8AnswerOptionText::create([
            'answer_option_text' => $request->answer_option_text,

        ]);
        return redirect(route('opttxts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quest = Fis8AnswerOptionText::findOrFail($id);
        $quest->delete();
        return redirect(route('opttxts.index'));
    }
}
