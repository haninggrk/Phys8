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
        $this->AdminDataOptionAnswer = Fis8AnswerOption::with('level')->search(trim($this->search))->get()->toArray();

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
                'opinion_text' => $cekUser['opinion_text'],
                'is_image' => $cekUser['is_image'],
            ]);
        }
        $this->editAdminDataOptionAnswerIndex = null;
    }
}
