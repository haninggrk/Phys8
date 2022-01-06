<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fis8Log;

class AdminDataLog extends Component
{

    public $AdminDataLog;
    public $search;

    public function render()
    {
        $this->AdminDataLog = Fis8Log::with('student')->search(trim($this->search))->get()->toArray();

        return view('livewire.admin-data-log', [
            'AdminDataLog' => $this->AdminDataLog,
        ]);
    }
}
