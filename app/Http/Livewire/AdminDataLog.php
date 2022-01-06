<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AdminDataLog extends Component
{

    public $AdminDataLog;
    public $search;

    public function render()
    {
        $this->AdminDataLog = User::with('student')->search(trim($this->search))->get()->toArray();

        return view('livewire.admin-data-log', [
            'AdminDataUser' => $this->AdminDataLog,
        ]);
    }
}
