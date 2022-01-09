<?php

namespace App\Http\Livewire;

use App\Models\Fis8Category;
use App\Models\Fis8GamePlayHistory;
use App\Models\Fis8Level;
use App\Models\Fis8MyUser;
use App\Models\User;
use Livewire\Component;

class Home extends Component
{
    public $historyUser;
    public $getHistoryUser;
    public $lastLevel;
    public $highScore;
    public $getHistoryFastTrack;
    public $leaderBoard;
    public $array;
    public $rankUser;

    public function render()
    {
        return view('livewire.home');
    }

    public function mount()
    {
        $this->getHistoryUser = User::find(auth()->user()->id)->levels;
        $this->array = [];
        $this->getHistoryFastTrack = Fis8GamePlayHistory::where('student_id', auth()->user()->id)->get();
        foreach ($this->getHistoryFastTrack as $data) {
            if (count($this->array) > 0) {
                for ($i = 0; $i < count($this->array); ++$i) {
                    if ($data->fis8_level_id != $this->array[$i] && $i == count($this->array) - 1) { //ceklagiok
                        if (Fis8Level::find($data->fis8_level_id)->category->name == 'Fast Track') {
                            array_push($this->array, $data->fis8_level_id);
                        }
                    }
                }
            } else {
                array_push($this->array, $data->fis8_level_id);
            }
        }
        $this->lastLevel = count($this->array);
        $getUser = User::find(auth()->user()->id);
        $this->highScore = 0;

        //saat ini hanya ada 1 game feazy
        $getCategory = Fis8Category::where('name', 'Feazy')->first();
        foreach ($getCategory->levels as $dataLevel) {
            foreach ($dataLevel->students as $dataStudent) {
                if ($dataStudent->id == auth()->user()->id) {
                    if ($this->highScore <= $dataStudent->pivot->score) {
                        $this->highScore = $dataStudent->pivot->score;
                    }
                }
            }
        }

        $this->leaderBoard = Fis8MyUser::orderBy('score', 'DESC')->with('student')->get();
    }
}
