<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AdminDataShootGameHistories extends Component
{
 
    public $search;

    public function render()
    {
        $this->AdminDataShootGameHistory = User::with('student')->search(trim($this->search))->get()->toArray();

        return view('livewire.admin-data-shoot-game-history', [
            'AdminDataShootGameHistory' => $this->AdminDataShootGameHistory,
        ]);
    }
}
