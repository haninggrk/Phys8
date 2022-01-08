<?php

namespace App\Http\Livewire;

use App\Models\Fis8Level;
use App\Models\Fis8Question;
use App\Models\Fis8QuizHistory;
use Livewire\Component;

class PembahasanUser extends Component
{
    public $myQuestions;
    public $historyId = 24;
    // public $levelId = 1;
    public $keterangaCorrectAnswer;
    public $numberQuestions;
    public $objHistory;
    public $getQuestionobj;

    public function getQuestionWithId($id, $numberQuestion)
    {
        $this->myQuestions = Fis8Question::find($id);

        $this->checkUserAnswer();
        $this->numberQuestions = $numberQuestion;
    }

    private function checkUserAnswer( )
    {

            if ($this -> getQuestionobj->correct_answer_option == $this -> getQuestionobj->pivot->user_answer) {
                $this->keterangaCorrectAnswer = 'Jawaban Benar! Dapat tambahan 50 skor.';
               return true;
            } else {
                $this->keterangaCorrectAnswer = 'Jawaban Salah! Jawban yang benar: '.$this -> getQuestionobj->correct_answer_option.'. Jawaban Kamu: '.$this -> getQuestionobj->pivot->user_answer;
            return false;
            }

    }

    public function render()
    {
        $this -> objHistory = Fis8QuizHistory::find($this->historyId);
        $this->myQuestions = $this -> objHistory -> questions[0];
        $this -> getQuestionobj = $this -> objHistory->questions->where('id', $this->myQuestions->id)->first();
        $this->checkUserAnswer();

        return view('livewire.pembahasan-user', [
            'DataQuestionFromhistoryId' => Fis8QuizHistory::find($this->historyId)->questions

        ]);

    }
}
