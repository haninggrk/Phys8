<?php

namespace App\Http\Livewire;

use App\Models\Fis8Category;
use App\Models\Fis8GamePlayHistory;
use App\Models\Fis8Level;
use App\Models\Fis8MyUser;
use App\Models\User;
use Livewire\Component;

class gametemp extends Component
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
        return view('livewire.gametemp');
    }

    public function mount()
    {
      
        

        
    }
}
