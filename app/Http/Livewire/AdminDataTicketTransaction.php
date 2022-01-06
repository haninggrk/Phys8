<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AdminDataTicketTransaction extends Component
{
    public $editAdminDataLevekIndex = null;
    public $AdminDataTicketTransaction;
    public $search;

    public function render()
    {
        $this->AdminDataTicketTransaction = User::with('student')->search(trim($this->search))->get()->toArray();

        return view('livewire.admin-data-transction-ticket', [
            'AdminDataTicketTransaction' => $this->AdminDataTicketTransaction,
        ]);
    }

    public function editAdminDataTicketTransaction($AdminDataTicketTransactionIndex)
    {
        $this->editAdminDataTicketTransactionIndex = $AdminDataTicketTransactionIndex;
    }

    public function saveAdminDataTicketTransaction($AdminDataTicketTransactionIndex)
    {
        $cekUser = $this->AdminDataTicketTransaction[$AdminDataTicketTransactionIndex] ?? null;

        if (!is_null($cekUser)) {
            $getUser = User::find($cekUser['id']);
            $getUser->update([
                'email' => $cekUser['email'],
                'username' => $cekUser['username'],
                'name' => $cekUser['name'],
                'school' => $cekUser['school'],
                'city' => $cekUser['city'],
                'birthyear' => $cekUser['birthyear'],
            ]);

            $getUser->myUser()->update([
                'is_active' => $cekUser['my_user']['is_active'],
                'is_admin' => $cekUser['my_user']['is_admin'],
                'ticket' => $cekUser['my_user']['ticket'],
                'score' => $cekUser['my_user']['score'],
                'money' => $cekUser['my_user']['money'],
                'photo' => $cekUser['my_user']['photo'],
            ]);
        }
        $this->editAdminDataTicketTransactionIndex = null;
    }
}
