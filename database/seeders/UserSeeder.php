<?php

namespace Database\Seeders;

use App\Models\Fis8Code;
use App\Models\Fis8GamePlayHistory;
use App\Models\Fis8Level;
use App\Models\Fis8Question;
use App\Models\Fis8QuizHistory;
use App\Models\User as ModelsUser;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; ++$i) {
            $createUser = \App\Models\User::factory()->create();

            $createUser->MyUser()->create();

            //   $createUser->codes()->attach([
           //     rand(1, count(Fis8Code::all())) => ['created_at' => now()],
             //   rand(1, count(Fis8Code::all())) => ['created_at' => now()],
            //]);
        }

        $arrayuserAnswer = array("a", "b", "c", "d");

        for($k=0;$k<50;$k++){
            $getLevel = Fis8Level::find(rand(1, count(Fis8Level::all())));
            $getUser = \App\Models\User::find(rand(1, count(\App\Models\User::all())));
    
            $createHistoryy =  $getUser->levels()->attach([
                $getLevel->id
            ]);
            $createHistory = Fis8GamePlayHistory::find(count(Fis8GamePlayHistory::all()));
           
            if($getLevel->category->name == "Fast Track"){
                $getQuestion = Fis8Question::where('fis8_level_id', $getLevel->id)->get();
            
                $createHistory->questions()->attach([
                    ($getQuestion[0]->id) => [
                        'user_answer' => $arrayuserAnswer[rand(0, count($arrayuserAnswer)-1)],
                    ],
                    ($getQuestion[1]->id) => [
                        'user_answer' => $arrayuserAnswer[rand(0, count($arrayuserAnswer)-1)],
                    ],
                    ($getQuestion[2]->id) => [
                        'user_answer' => $arrayuserAnswer[rand(0, count($arrayuserAnswer)-1)],
                    ],
                    ($getQuestion[3]->id) => [
                        'user_answer' => $arrayuserAnswer[rand(0, count($arrayuserAnswer)-1)],
                    ],
                    ($getQuestion[4]->id) => [
                        'user_answer' => $arrayuserAnswer[rand(0, count($arrayuserAnswer)-1)],
                    ],
                    ($getQuestion[5]->id) => [
                        'user_answer' => $arrayuserAnswer[rand(0, count($arrayuserAnswer)-1)],
                    ],
                    ($getQuestion[6]->id) => [
                        'user_answer' => $arrayuserAnswer[rand(0, count($arrayuserAnswer)-1)],
                    ],
                    ($getQuestion[7]->id) => [
                        'user_answer' => $arrayuserAnswer[rand(0, count($arrayuserAnswer)-1)],
                    ],
                    ($getQuestion[8]->id) => [
                        'user_answer' => $arrayuserAnswer[rand(0, count($arrayuserAnswer)-1)],
                    ],
                    ($getQuestion[9]->id) => [
                        'user_answer' => $arrayuserAnswer[rand(0, count($arrayuserAnswer)-1)],
                    ],
                ]);
    
                $i=0;
                $cek = 0;
                foreach($createHistory->questions as $data){
                    if($getQuestion[$i]->correct_answer_option == $data['pivot']['user_answer']){
                        $cek++;
                        $createHistory->update([
                           'score' => $createHistory->score+$getLevel->score_reward,
                           'money_reward' => $createHistory->money_reward+$getLevel->money_reward,
                           'ticket_reward' => $createHistory->ticket_reward+$getLevel->ticket_reward,
                           'sum_correct_answer' => $cek
                        ]);
                    }
                    $i++;
                }     
            }else{
                $createHistory->update([
                'score' => rand(0, 2000),
                'money_reward' => rand(0, 500),
                'ticket_reward' => rand(0,2)
                 ]);
            }
        }
    }
}
