<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fis8AnswerOption;

class AdminDataAnswersOptions extends Component
{
    public $editAdminDataOptionAnswerIndex = null;
    public $AdminDataOptionAnswer;
    public $search;

    public function render()
    {

        return view('livewire.admin-data-option-answers', [
            'AdminDataOptionAnswer' => $this->AdminDataOptionAnswer,
        ]);
    }

    public function editAdminDataOptionAnswer($AdminDataOptionAnswerIndex)
    {
        $this->editAdminDataOptionAnswerIndex = $AdminDataOptionAnswerIndex;
    }

    public function saveAdminDataOptionAnswer($AdminDataOptionAnswerIndex)
    {
        $cekUser = $this->AdminDataOptionAnswer[$AdminDataOptionAnswerIndex] ?? null;

        if (!is_null($cekUser)) {
            $getUser = Fis8AnswerOption::find($cekUser['id']);
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
        $this->editAdminDataOptionAnswerIndex = null;
    }
}
