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
        }
        $this->editAdminDataQuestionIndex = null;
    }
}
