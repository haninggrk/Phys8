<?php

namespace App\Http\Livewire;

use App\Models\Fis8Category;
use App\Models\Fis8GamePlayHistory;
use App\Models\Fis8Level;
use App\Models\User;
use Livewire\Component;

class game extends Component
{
    public $getCategoryFeazy;
    public $myLevelFeazy;
    public Fis8GamePlayHistory $myHistoryFeazy;

    public $lastLevel;
    public $highScore;
    public $getHistoryFastTrack;
    public $leaderBoard;
    public $array;
    public $rankUser;

    public function render()
    {
        return view('livewire.game');
    }

    public function mount()
    {
        $this->getCategoryFeazy = Fis8Category::where('name', 'Feazy')->first();
    }

    public function startGameFeazy($levelId)
    {
        $getUser = User::find(auth()->user()->id);
        $this->myLevelFeazy = Fis8Level::find($levelId);

        $getUser->levels()->attach([
            $levelId,
        ]);

        $this->myHistoryFeazy = Fis8GamePlayHistory::orderBy('id', 'DESC')->first();
    }
}
