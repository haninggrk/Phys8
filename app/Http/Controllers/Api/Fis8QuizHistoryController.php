<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Fis8QuizHistoryResource;
use App\Models\Fis8GamePlayHistory;
use App\Models\Fis8QuizHistory;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\Fis8GamePlayHistoryResource;
use App\Models\Fis8Level;

class Fis8QuizHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getHistory = Fis8GamePlayHistory::all();

        return ['result' => Fis8GamePlayHistoryResource::collection($getHistory)];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getUser = User::find($request->student_id);
        $getLevel = Fis8Level::find($request->fis8_level_id);

        $createHistory =  $getUser->levels()->attach([
            $getLevel->id
        ]);

        return ['result' => Fis8GamePlayHistoryResource::collection(Fis8GamePlayHistory::where('id', $createHistory->id)->get())];
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
        return ['result' => Fis8GamePlayHistoryResource::collection(Fis8GamePlayHistory::where('id', $id)->get())];
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
