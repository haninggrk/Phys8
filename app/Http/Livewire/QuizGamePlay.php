<?php

namespace App\Http\Livewire;

use App\Models\Fis8Level;
use Livewire\Component;
use App\Models\Fis8Question;

class QuizGamePlay extends Component
{
    public $myQuestions;

    public function render()
    {
        return view('livewire.quiz-game-play', [
            "DataQuestionFromLevelId" => Fis8Level::find(1)->questions
        ]);
    }

    public function getQuestionWithId($id){
        $this->myQuestions = Fis8Question::find($id);
    }
}
