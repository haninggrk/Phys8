<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AdminDataTicketTransaction extends Component
{

    public $AdminDataTicketTransaction;
    public $search;

    public function render()
    {
        $this->AdminDataTicketTransaction = User::with('student')->search(trim($this->search))->get()->toArray();

        return view('livewire.admin-data-transction-ticket', [
            'AdminDataTicketTransaction' => $this->AdminDataTicketTransaction,
        ]);
    }
}
