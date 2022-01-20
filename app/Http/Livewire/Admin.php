<?php

namespace App\Http\Livewire;

use App\Models\Fis8AnswerOption;
use App\Models\Fis8Category;
use App\Models\Fis8GamePlayHistory;
use App\Models\Fis8Level;
use App\Models\Fis8Log;
use App\Models\Fis8Question;
use App\Models\Fis8QuestionAnswer;
use App\Models\Fis8TicketTransaction;
use App\Models\Fis8UserAnswer;
use App\Models\User;
use Livewire\Component;

class Admin extends Component
{
    public $page = 'students';
    public $editAdminDataIndex = null;
    public $AdminDataUser;

    public $AdminDataLevels;
    public $AdminDataQuestionAnswers;
    public $AdminDataQuestions;
    public $AdminDataTicketTransaction;

    public $AdminDataCategories;
    public $AdminDataLogs;

    public $AdminDataUserAnswers;

    public $AdminDataGamePlayHistories;
    
    public $AdminDataAnswerOptions;
    public $search;
    protected $queryString = ['page'];

    public function render()
    {
        if ($this->page == 'students') {
            $this->AdminDataUser = User::with('myUser')->search(trim($this->search))->get()->toArray();

            return view('livewire.admin', [
                'AdminDataUser' => $this->AdminDataUser,
            ]);
        } elseif ($this->page == 'fis8_ticket_transactions') {
            $this->AdminDataTicketTransaction = Fis8TicketTransaction::with('student')->search(trim($this->search))->get()->toArray();

            return view('livewire.admin', [
                'AdminDataTicketTransaction' => $this->AdminDataTicketTransaction,
            ]);
        } elseif ($this->page == 'fis8_logs') {
            $this->AdminDataLogs = Fis8Log::with('student')->search(trim($this->search))->get()->toArray();

            return view('livewire.admin', [
                'AdminDataLogs' => $this->AdminDataLogs,
            ]);
        } elseif ($this->page == 'fis8_categories') {
            $this->AdminDataCategories = Fis8Category::search(trim($this->search))->get()->toArray();

            return view('livewire.admin', [
                'AdminDataCategories' => $this->AdminDataCategories,
            ]);
        } elseif ($this->page == 'fis8_levels') {
            $this->AdminDataLevels = Fis8Level::with('category')->search(trim($this->search))->get()->toArray();

            return view('livewire.admin', [
                'AdminDataLevels' => $this->AdminDataLevels,
            ]);
        } elseif ($this->page == 'fis8_questions') {
            $this->AdminDataQuestions = Fis8Question::with('level')->search(trim($this->search))->get()->toArray();

            return view('livewire.admin', [
                'AdminDataQuestions' => $this->AdminDataQuestions,
            ]);
        }elseif ($this->page == 'fis8_answer_options') {
            $this->AdminDataAnswerOptions = Fis8AnswerOption::search(trim($this->search))->get()->toArray();

            return view('livewire.admin', [
                'AdminDataAnswerOptions' => $this->AdminDataAnswerOptions,
            ]);
        }
        elseif ($this->page == 'fis8_question_answers') {
            $this->AdminDataQuestionAnswers = Fis8QuestionAnswer::search(trim($this->search))->get()->toArray();

            return view('livewire.admin', [
                'AdminDataQuestionAnswers' => $this->AdminDataQuestionAnswers,
            ]);
        } elseif ($this->page == 'fis8_game_play_histories') {
            $this->AdminDataGamePlayHistories = Fis8GamePlayHistory::search(trim($this->search))->get()->toArray();

            return view('livewire.admin', [
                'AdminDataGamePlayHistories' => $this->AdminDataGamePlayHistories,
            ]);
        }elseif ($this->page == 'fis8_user_answers') {
            $this->AdminDataUserAnswers = Fis8UserAnswer::search(trim($this->search))->get()->toArray();

            return view('livewire.admin', [
                'AdminDataUserAnswers' => $this->AdminDataUserAnswers,
            ]);
        }
    }

    public function setPage($page)
    {
        $this->editAdminDataIndex = null;
        $this->search=null;
        $pageLower = strtolower($page);
        $this->page = $pageLower;

    }

    public function deleteAdminData($index)
    {
        if ($this->page == 'students') {
            $cek = $this->AdminDataUser[$index] ?? null;

            if (!is_null($cek)) {
                User::destroy($cek['id']);
            }
        } elseif ($this->page == 'fis8_ticket_transactions') {
            $cek = $this->AdminDataTicketTransaction[$index] ?? null;

            if (!is_null($cek)) {
                Fis8TicketTransaction::destroy($cek['id']);
            }
        } elseif ($this->page == 'fis8_logs') {
            $cek = $this->AdminDataLogs[$index] ?? null;

            if (!is_null($cek)) {
                Fis8Log::destroy($cek['id']);
            }
        } elseif ($this->page == 'fis8_categories') {
            $cek = $this->AdminDataCategories[$index] ?? null;

            if (!is_null($cek)) {
                Fis8Category::destroy($cek['id']);
            }
        } elseif ($this->page == 'fis8_levels') {
            $cek = $this->AdminDataLevels[$index] ?? null;

            if (!is_null($cek)) {
                Fis8Level::destroy($cek['id']);
            }
        }
        elseif ($this->page == 'fis8_questions') {
            $cek = $this->AdminDataQuestions[$index] ?? null;

            if (!is_null($cek)) {
                Fis8Question::destroy($cek['id']);
            }
        }
        elseif ($this->page == 'fis8_answer_options') {
            $cek = $this->AdminDataAnswerOptions[$index] ?? null;

            if (!is_null($cek)) {
                Fis8AnswerOption::destroy($cek['id']);
            }
        }  elseif ($this->page == 'fis8_question_answers') {
            $cek = $this->AdminDataQuestionAnswers[$index] ?? null;

            if (!is_null($cek)) {
                Fis8QuestionAnswer::destroy($cek['id']);
            }
        }elseif ($this->page == 'fis8_game_play_histories') {
            $cek = $this->AdminDataGamePlayHistories[$index] ?? null;

            if (!is_null($cek)) {
                Fis8GamePlayHistory::destroy($cek['id']);
            }
        }elseif ($this->page == 'fis8_user_answers') {
            $cek = $this->AdminDataUserAnswers[$index] ?? null;

            if (!is_null($cek)) {
                Fis8UserAnswer::destroy($cek['id']);
            }
        }
    }

    public function editAdminData($AdminDataIndex)
    {
        $this->editAdminDataIndex = $AdminDataIndex;
    }

    public function saveAdminData($AdminDataIndex)
    {
        if ($this->page == 'students') {
            $cek = $this->AdminDataUser[$AdminDataIndex] ?? null;

            if (!is_null($cek)) {
                $getUser = User::find($cek['id']);
                $getUser->update([
                'email' => $cek['email'],
                'username' => $cek['username'],
                'name' => $cek['name'],
                'school' => $cek['school'],
                'city' => $cek['city'],
                'birthyear' => $cek['birthyear'],
            ]);

                $getUser->myUser()->update([
                'is_active' => $cek['my_user']['is_active'],
                'is_admin' => $cek['my_user']['is_admin'],
                'ticket' => $cek['my_user']['ticket'],
                'score' => $cek['my_user']['score'],
                'money' => $cek['my_user']['money'],
                'photo' => $cek['my_user']['photo'],
            ]);
            }
        } elseif ($this->page == 'fis8_categories') {
            $cek = $this->AdminDataCategories[$AdminDataIndex] ?? null;

            if (!is_null($cek)) {
                $getCategory = Fis8Category::find($cek['id']);
                $getCategory->update([
                'name' => $cek['name'],
                'description' => $cek['description'],
            ]);
            }
        } elseif ($this->page == 'fis8_levels') {
            $cek = $this->AdminDataLevels[$AdminDataIndex] ?? null;

            if (!is_null($cek)) {
                $getLevel = Fis8Level::find($cek['id']);
                $getLevel->update([
                    'fis8_category_id' => $cek['category']['id'],
                'name' => $cek['name'],
                'description' => $cek['description'],
            ]);
            }
        } elseif ($this->page == 'fis8_questions') {
            $cek = $this->AdminDataQuestions[$AdminDataIndex] ?? null;

            if (!is_null($cek)) {
                $getQuestion = Fis8Question::find($cek['id']);
                $getQuestion->update([
                    'fis8_level_id' => $cek['level']['id'],
                'question_text' => $cek['question_text'],
                'discussion' => $cek['discussion'],
            ]);
            }
        }
        elseif ($this->page == 'fis8_answer_options') {
            $cek = $this->AdminDataAnswerOptions[$AdminDataIndex] ?? null;

            if (!is_null($cek)) {
                $getAnswerOption = Fis8AnswerOption::find($cek['id']);
                $getAnswerOption->update([
                    'option_text' => $cek['option_text'],
                'is_image' => $cek['is_image'],
            ]);
            }
        }
        elseif ($this->page == 'fis8_question_answers') {
            $cek = $this->AdminDataQuestionAnswers[$AdminDataIndex] ?? null;

            if (!is_null($cek)) {
                $getQuestionAnswer = Fis8QuestionAnswer::find($cek['id']);
                $getQuestionAnswer->update([
                    'fis8_question_id' => $cek['fis8_question_id'],
                    'fis8_answer_option_id' => $cek['fis8_answer_option_id'],
                'option' => $cek['option'],
            ]);
            }
        }
        $this->editAdminDataIndex = null;
    }
}
