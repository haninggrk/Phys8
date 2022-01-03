<?php

namespace App\Http\Controllers;

use App\Models\Fis8QuizHistory;
use Illuminate\Http\Request;

class Fis8QuizHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hi = Fis8QuizHistory::all();

        return view('ReadAdminDataHistory', [
            'history' => $hi,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
     * @return \Illuminate\Http\Response
     */
    public function show(Fis8QuizHistory $fis8QuizHistory)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Fis8QuizHistory $fis8QuizHistory)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fis8QuizHistory $fis8QuizHistory)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fis8QuizHistory $fis8QuizHistory)
    {
    }
}
