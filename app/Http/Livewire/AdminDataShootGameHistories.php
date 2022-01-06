<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fis8ShootGameHistory;

class AdminDataShootGameHistories extends Component
{
    public $AdminDataShootGameHistory;
    public $search;

    public function render()
    {
        $this->AdminDataShootGameHistory = Fis8ShootGameHistory::with('student')->search(trim($this->search))->get()->toArray();

        return view('livewire.admin-data-shoot-game-history', [
            'AdminDataShootGameHistory' => $this->AdminDataShootGameHistory,
        ]);
    }
}
