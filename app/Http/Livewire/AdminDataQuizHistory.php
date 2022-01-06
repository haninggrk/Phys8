<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fis8QuizHistory;

class AdminDataQuizHistory extends Component
{
    public $AdminDataQuizHistory;
    public $search;

    public function render()
    {
        $this->AdminDataQuizHistory = Fis8QuizHistory::with('student')->search(trim($this->search))->get()->toArray();

        return view('livewire.admin-data-quiz-history', [
            'AdminDataQuizHistory' => $this->AdminDataQuizHistory,
        ]);
    }
}
