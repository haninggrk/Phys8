<?php

namespace App\Http\Livewire;

use App\Models\Fis8GamePlayHistory;
use Livewire\Component;

class AdminDataGamePlayHistory extends Component
{
    public $AdminDataGamePlayHistory;
    public function render()
    {
        return view('livewire.admin-data-game-play-history');
    }

    public function mount(){
        $this->AdminDataGamePlayHistory = Fis8GamePlayHistory::all();
    }
}
