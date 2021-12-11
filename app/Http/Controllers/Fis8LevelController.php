<?php

namespace App\Http\Controllers;

use App\Models\Fis8Level;
use Illuminate\Http\Request;

class Fis8LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levels = Fis8Level::all();
        return view('ReadAdminDataLevel', [
            'levels' => $levels
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CreateLevel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:10',
         ]);

        //
        Fis8Level::create([
            'name' => $request->name,
            'thumbnail' => $request->thumbnail,
            'description' => $request->description,
            'score_reward' => $request->score_reward,
            'ticket_reward' => $request->ticket_reward,
            'money_reward' => $request->money_reward,
            'mamximum_time' => $request->maximum_time,

        ]);
        return redirect(route('levels.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fis8Level  $fis8Level
     * @return \Illuminate\Http\Response
     */
    public function show(Fis8Level $fis8Level)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fis8Level  $fis8Level
     * @return \Illuminate\Http\Response
     */
    public function edit(Fis8Level $fis8Level)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fis8Level  $fis8Level
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fis8Level $fis8Level)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fis8Level  $fis8Level
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $level = Fis8Level::findOrFail($id);
        $level->delete();
        return redirect(route('levels.index'));
    }
}
