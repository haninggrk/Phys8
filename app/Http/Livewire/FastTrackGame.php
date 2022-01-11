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
    public $myQuestions;
    public $myHistory;
    public $keteranganCorrectAnswer;
    public $numberQuestions;
    public $DataQuestionFromLevelId;
    public $currentuser;
    public $getQuestionobj;

    public function render()
    {
        $this->getCategory = Fis8Category::where('name', 'Fast Track')->first();
        if ($this->myQuestions != null) {
            $this->getQuestionobj = $this->myHistory->questions->where('id', $this->myQuestions->id)->first();
        }

        return view('livewire.fast-track-game');
    }

    public function startQuiz($levelId)
    {
        $getUser = User::find(auth()->user()->id);
        $this->myLevel = Fis8Level::find($levelId);
        $this->DataQuestionFromLevelId = Fis8Level::find($this->myLevel->id)->questions;

        $getUser->levels()->attach([
            $levelId,
        ]);

        $this->myHistory = Fis8GamePlayHistory::orderBy('id', 'DESC')->first();
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
        $this->getQuestionobj = $this->myHistory->questions->where('id', $this->myQuestions->id)->first();
        if ($this->getQuestionobj == null || $this->getQuestionobj->pivot->user_answer == null) {
            $this->keteranganCorrectAnswer = '';

            return false;
        } else {
            if ($this->getQuestionobj->correct_answer_option == $this->getQuestionobj->pivot->user_answer) {
                return true;
            } else {
                $this->keteranganCorrectAnswer = 'Jawaban Salah! Jawban yang benar: '.$this->getQuestionobj->correct_answer_option.'. Jawaban Kamu: '.$this->getQuestionobj->pivot->user_answer;

                return false;
            }
        }
    }

    public function addReward($boolean)
    {
        if ($boolean) {
            $this->currentuser = User::find(auth()->user()->id)->myUser;

            $this->currentuser->update([
                'score' => $this->currentuser->score + $this->myLevel->score_reward,
                'money' => $this->currentuser->money + $this->myLevel->money_reward,
                'ticket' => $this->currentuser->ticket + $this->myLevel->ticket_reward,
            ]);

            Fis8GamePlayHistory::find($this->myHistory->id)->update([
                'score' => Fis8GamePlayHistory::find($this->myHistory->id)->score + $this->myLevel->score_reward,
                'money_reward' => Fis8GamePlayHistory::find($this->myHistory->id)->money_reward + $this->myLevel->money_reward,
                'ticket_reward' => Fis8GamePlayHistory::find($this->myHistory->id)->ticket_reward + $this->myLevel->ticket_reward,
            ]);

            $this->keteranganCorrectAnswer = 'Jawaban Benar! Dapat tambahan 50 skor.';
        }
    }
}
