<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fis8UserAnswer;

class AdminDataUserAnswer extends Component
{
    public $editAdminDataUserAnswer = null;
    public $AdminDataUserAnswer;
    public $search;

    public function render()
    {
        $this->AdminDataUserAnswer = Fis8UserAnswer::with('category')->search(trim($this->search))->get()->toArray();

        return view('livewire.admin-data-user-answer', [
            'AdminDataUserAnswer' => $this->AdminDataUserAnswer,
        ]);
    }

    public function editAdminDataUserAnswer($AdminDataUserAnswerIndex)
    {
        $this->editAdminDataUserAnswerIndex = $AdminDataUserAnswerIndex;
    }

    public function saveAdminDataUserAnswer($AdminDataUserAnswerIndex)
    {
        $cekUser = $this->AdminDataUserAnswer[$AdminDataUserAnswerIndex] ?? null;

        if (!is_null($cekUser)) {
            $getUser = Fis8UserAnswer::find($cekUser['id']);
            $getUser->update([
                'name' => $cekUser['name'],
                'thumbnail' => $cekUser['thumbnail'],
                'description' => $cekUser['description'],
                'score_reward' => $cekUser['score_reward'],
                'ticket_reward' => $cekUser['ticket_reward'],
                'money_reward' => $cekUser['money_reward'],
                'maximum_time' => $cekUser['maximum_time'],
                'fis8_category_id' => $cekUser['category']['id'],
            ]);
        }
        $this->editAdminDataUserAnswerIndex = null;
    }
}
