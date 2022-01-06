<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fis8TicketTransaction;

class AdminDataTicketTransaction extends Component
{

    public $AdminDataTicketTransaction;
    public $search;

    public function render()
    {
        $this->AdminDataTicketTransaction = Fis8TicketTransaction::with('student')->search(trim($this->search))->get()->toArray();

        return view('livewire.admin-data-transction-ticket', [
            'AdminDataTicketTransaction' => $this->AdminDataTicketTransaction,
        ]);
    }
}
