<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AdminDataLog extends Component
{
    public $editAdminDataLogsIndex = null;
    public $AdminDataLog;
    public $search;

    public function render()
    {
        $this->AdminDataLog = User::with('myUser')->search(trim($this->search))->get()->toArray();

        return view('livewire.admin-data-log', [
            'AdminDataUser' => $this->AdminDataLog,
        ]);
    }

    public function editAdminDataLog($AdminDataLogIndex)
    {
        $this->editAdminDataLogsIndex = $AdminDataLogIndex;
    }

    public function saveAdminDataLog($AdminDataLogIndex)
    {
        $cekUser = $this->AdminDataLog[$AdminDataLogIndex] ?? null;

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
        $this->editAdminDataLogIndex = null;
    }
}
