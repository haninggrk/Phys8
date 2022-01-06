<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fis8Question;

class AdminDataAnswersOptions extends Component
{
    public $editAdminDataQuestionIndex = null;
    public $AdminDataQuestion;
    public $search;

    public function render()
    {
        $this->AdminDataQuestion = Fis8Question::with('level')->search(trim($this->search))->get()->toArray();

        return view('livewire.admin-data-option-answers', [
            'AdminDataQuestion' => $this->AdminDataQuestion,
        ]);
    }

    public function editAdminDataQuestion($AdminDataQuestionIndex)
    {
        $this->editAdminDataQuestionIndex = $AdminDataQuestionIndex;
    }

    public function saveAdminDataQuestion($AdminDataQuestionIndex)
    {
        $cekUser = $this->AdminDataQuestion[$AdminDataQuestionIndex] ?? null;

        if (!is_null($cekUser)) {
            $getUser = Fis8Question::find($cekUser['id']);
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
        $this->editAdminDataQuestionIndex = null;
    }
}
