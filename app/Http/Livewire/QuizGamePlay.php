<?php

namespace App\Http\Livewire;

use App\Models\Fis8Level;
use Livewire\Component;
use App\Models\Fis8Question;
use App\Models\Fis8QuizHistory;

class QuizGamePlay extends Component
{
    public $myQuestions;
    public $historyId = 24;
    public $levelId = 1;
    public $keterangaCorrectAnswer;
    public $numberQuestions;

    public function render()
    {
        return view('livewire.quiz-game-play', [
            'DataQuestionFromLevelId' => Fis8Level::find($this->levelId)->questions,
        ]);
    }

    public function getQuestionWithId($id, $numberQuestion)
    {
        $this->myQuestions = Fis8Question::find($id);

        $this->checkUserAnswer();
        $this->numberQuestions = $numberQuestion;
    }

    public function saveUserAnswer($questionID, $userAnswerOption)
    {
        $history = Fis8QuizHistory::find($this->historyId);

        $history->questions()->attach([
            $questionID => [
                'user_answer' => $userAnswerOption,
            ],
        ]);

        $this->addReward( $this->checkUserAnswer());
    }

    private function checkUserAnswer( )
    {
        $objHistory = Fis8QuizHistory::find($this->historyId);
        $getQuestionobj = $objHistory->questions->where('id', $this->myQuestions->id)->first();

        if($getQuestionobj == null || $getQuestionobj->pivot->user_answer == null){
            $this->keterangaCorrectAnswer = '';
        }else{
            if ($getQuestionobj->correct_answer_option == $getQuestionobj->pivot->user_answer) {
                $this->keterangaCorrectAnswer = 'Jawaban Benar! Dapat tambahan 50 skor.';
               return true;
            } else {
                $this->keterangaCorrectAnswer = 'Jawaban Salah! Jawban yang benar: '.$getQuestionobj->correct_answer_option.'. Jawaban Kamu: '.$getQuestionobj->pivot->user_answer;
            return false;
            }
        }
    }

    private function addReward($boolean)
    {
        if ($boolean) {
            $objHistory = Fis8QuizHistory::find($this->historyId);
            $objHistory->quiz_score += 50;

            $objHistory->save();
            $this->keterangaCorrectAnswer = 'Jawaban Benar! Dapat tambahan 50 skor.';
        }
    }
}
