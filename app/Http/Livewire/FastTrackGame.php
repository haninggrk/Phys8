<?php

namespace App\Http\Livewire;

use App\Models\Fis8Category;
use App\Models\Fis8GamePlayHistory;
use App\Models\Fis8Level;
use App\Models\Fis8Question;
use App\Models\User;
use Livewire\Component;

class FastTrackGame extends Component
{
    public Fis8Category $getCategory;
    public Fis8Level $myLevel;
    public Fis8Question $myQuestions;
    public Fis8GamePlayHistory $myHistory;
    public $keteranganCorrectAnswer;
    public $numberQuestions;
    public $DataQuestionFromLevelId;

    public function render()
    {
        $this -> getCategory = Fis8Category::where('name', "Fast Track")-> first();
        return view('livewire.fast-track-game');
    }
  

    public function startQuiz($levelId){
       
        $getUser = User::find(auth()->user()->id);
        $this->myLevel = Fis8Level::find($levelId);
        $this->DataQuestionFromLevelId = Fis8Level::find($this->myLevel->id)->questions;

       
        $this->myHistory = $getUser->levels()->attach([
            $levelId
        ]);
     
    }

    ///////////////////QUIZ GAMEPLAY
    public function getQuestionWithId($id, $numberQuestion)
    {
        $this->myQuestions = Fis8Question::find($id);

        $this->checkUserAnswer();
        $this->numberQuestions = $numberQuestion;
    }

    public function saveUserAnswer($questionID, $userAnswerOption)
    {
     

        $this->myHistory->questions()->attach([
            $questionID => [
                'user_answer' => $userAnswerOption,
            ],
        ]);

        $this->addReward($this->checkUserAnswer());
    }

    public function checkUserAnswer()
    {

        $getQuestionobj = $this->myHistory->questions->where('id', $this->myQuestions->id)->first();

        if ($getQuestionobj == null || $getQuestionobj->pivot->user_answer == null) {
            $this->keteranganCorrectAnswer = '';
            return false;
        } else {
            if ($getQuestionobj->correct_answer_option == $getQuestionobj->pivot->user_answer) {
                return true;
            } else {
                $this->keteranganCorrectAnswer = 'Jawaban Salah! Jawban yang benar: '.$getQuestionobj->correct_answer_option.'. Jawaban Kamu: '.$getQuestionobj->pivot->user_answer;

                return false;
            }
        }
    }

    public function addReward($boolean)
    {
        if ($boolean) {
            $this->myHistory->score += $this->myLevel->score_reward;
            $this->myHistory->money_reward += $this->myLevel->money_reward;
            $this->myHistory->save();
            $this->keteranganCorrectAnswer = 'Jawaban Benar! Dapat tambahan 50 skor.';
        }
    }
}
