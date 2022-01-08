<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ReadHistoryUser extends Component
{
    public $getUser;
    public $getHistory;

    public function render()
    {
        $this -> getUser = User::find(1);
        $this -> getHistory = $this -> getUser -> quizHistories;
        return view('livewire.read-history-user');
    }
}
