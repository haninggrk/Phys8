<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AdminDataUser extends Component
{
    public $editAdminDataUserIndex = null;
    public $AdminDataUser;

    public function render()
    {
        $this->AdminDataUser = User::with('myUser')->get()->toArray();

        return view('livewire.admin-data-user',[
            'AdminDataUser' => $this->AdminDataUser,
        ]);
    }

    public function editAdminDataUser($AdminDataUserIndex){
        $this->editAdminDataUserIndex = $AdminDataUserIndex;
    }

    public function saveAdminDataUser($AdminDataUserIndex){
        $cekUser = $this->AdminDataUser[$AdminDataUserIndex]??null;
       
        if(!is_null($cekUser)){
            $getUser = User::find( $cekUser['id']);
            $getUser->update([
                'email' =>$cekUser['email'],
                'username' =>$cekUser['username'],
                'name' => $cekUser['name'],
                'school' => $cekUser['school'],
                'city' => $cekUser['city'],
                'birthyear' => $cekUser['birthyear'],
            ]);

            $getUser->myUser()->update([
                'is_active' => $cekUser['my_user']['is_active'],
                'is_admin'  => $cekUser['my_user']['is_admin'],
                'ticket'  => $cekUser['my_user']['ticket'],
                'score'  => $cekUser['my_user']['score'],
                'money' => $cekUser['my_user']['money'],
                'photo' => $cekUser['my_user']['photo'],
            ]);
        }
        $this->editAdminDataUserIndex = null;
    }
}
