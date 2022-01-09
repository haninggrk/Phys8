<?php

namespace App\Http\Livewire;

use App\Models\Fis8Question;
use Livewire\Component;

class AdminDataQuestion extends Component
{
    public $editAdminDataQuestionIndex = null;
    public $AdminDataQuestion;
    public $search;

    public function render()
    {
        $this->AdminDataQuestion = Fis8Question::with('level')->search(trim($this->search))->get()->toArray();

        return view('livewire.admin-data-question', [
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
                'question_text' => $cekUser['question_text'],
                'discussion' => $cekUser['discussion'],
                'fis8_level_id' => $cekUser['level']['id'],
            ]);
        }
        $this->editAdminDataQuestionIndex = null;
    }
}
