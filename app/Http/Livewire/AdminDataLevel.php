<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fis8Level;

class AdminDataLevel extends Component
{
    public $editAdminDataLevelIndex = null;
    public $AdminDataLevel;
    public $search;

    public function render()
    {
        $this->AdminDataLevel = Fis8Level::with('category')->search(trim($this->search))->get()->toArray();

        return view('livewire.admin-data-level', [
            'AdminDataLevel' => $this->AdminDataLevel,
        ]);
    }

    public function editAdminDataLevel($AdminDataLevelIndex)
    {
        $this->editAdminDataLevelIndex = $AdminDataLevelIndex;
    }

    public function saveAdminDataLevel($AdminDataLevelIndex)
    {
        $cekUser = $this->AdminDataLevel[$AdminDataLevelIndex] ?? null;

        if (!is_null($cekUser)) {
            $getUser = Fis8Level::find($cekUser['id']);
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
        $this->editAdminDataLevelIndex = null;
    }
}
