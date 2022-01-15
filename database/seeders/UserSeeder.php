<?php

namespace Database\Seeders;

use App\Models\Fis8Code;
use App\Models\Fis8GamePlayHistory;
use App\Models\Fis8Level;
use App\Models\Fis8Question;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $num = ['0', '1'];
        $school = [
            'SMA NEGERI 1 TARAKAN', 'SMA NEGERI 2 TARAKAN', 'SMA NEGERI 3 TARAKAN', 'SMPIT ULUL ALBAB',
        ];

        for ($i = 0; $i < 50; ++$i) {
            $createUser = \App\Models\User::factory()->create();

            $createUser->MyUser()->create([
                'is_active' => $num[rand(0, 1)],
                'is_login' => $num[rand(0, 1)],
                'is_admin' => $num[rand(0, 1)],
            ]);

            if ($createUser->myUser->is_admin == '0') {
                $createUser->update([
                    'school' => $school[rand(0, count($school) - 1)],
                ]);
            } else {
                $createUser->MyUser()->update([
                    'money' => 0,
                    'ticket' => 0,
                ]);
            }

            //   $createUser->codes()->attach([
           //     rand(1, count(Fis8Code::all())) => ['created_at' => now()],
             //   rand(1, count(Fis8Code::all())) => ['created_at' => now()],
            //]);
        }

        $arrayuserAnswer = ['a', 'b', 'c', 'd'];

        for ($k = 0; $k < 150; ++$k) {
            $getLevel = Fis8Level::find(rand(1, count(Fis8Level::all())));
            $getUser = \App\Models\User::find(rand(1, count(\App\Models\User::all())));

            if ($getUser->myUser->is_admin != '1') {
                $createHistoryy = $getUser->levels()->attach([
                    $getLevel->id,
                ]);
                $createHistory = Fis8GamePlayHistory::find(count(Fis8GamePlayHistory::all()));

                if ($getLevel->category->name == 'Fast Track') {
                    $getQuestion = Fis8Question::where('fis8_level_id', $getLevel->id)->get();

                    $createHistory->questions()->attach([
                        ($getQuestion[0]->id) => [
                            'user_answer' => $arrayuserAnswer[rand(0, count($arrayuserAnswer) - 1)],
                        ],
                        ($getQuestion[1]->id) => [
                            'user_answer' => $arrayuserAnswer[rand(0, count($arrayuserAnswer) - 1)],
                        ],
                        ($getQuestion[2]->id) => [
                            'user_answer' => $arrayuserAnswer[rand(0, count($arrayuserAnswer) - 1)],
                        ],
                        ($getQuestion[3]->id) => [
                            'user_answer' => $arrayuserAnswer[rand(0, count($arrayuserAnswer) - 1)],
                        ],
                        ($getQuestion[4]->id) => [
                            'user_answer' => $arrayuserAnswer[rand(0, count($arrayuserAnswer) - 1)],
                        ],
                        ($getQuestion[5]->id) => [
                            'user_answer' => $arrayuserAnswer[rand(0, count($arrayuserAnswer) - 1)],
                        ],
                        ($getQuestion[6]->id) => [
                            'user_answer' => $arrayuserAnswer[rand(0, count($arrayuserAnswer) - 1)],
                        ],
                        ($getQuestion[7]->id) => [
                            'user_answer' => $arrayuserAnswer[rand(0, count($arrayuserAnswer) - 1)],
                        ],
                        ($getQuestion[8]->id) => [
                            'user_answer' => $arrayuserAnswer[rand(0, count($arrayuserAnswer) - 1)],
                        ],
                        ($getQuestion[9]->id) => [
                            'user_answer' => $arrayuserAnswer[rand(0, count($arrayuserAnswer) - 1)],
                        ],
                    ]);

                    $i = 0;
                    $cek = 0;
                    foreach ($createHistory->questions as $data) {
                        if ($getQuestion[$i]->correct_answer_option == $data['pivot']['user_answer']) {
                            ++$cek;
                            $createHistory->update([
                               'score' => $createHistory->score + $getLevel->score_reward,
                               'money_reward' => $createHistory->money_reward + $getLevel->money_reward,
                               'ticket_reward' => $createHistory->ticket_reward + $getLevel->ticket_reward,
                               'sum_correct_answer' => $createHistory->sum_correct_answer + 1,
                            ]);
                            $cekLevel = 0;
                            foreach (Fis8GamePlayHistory::where('student_id', $getUser->id)->get() as $dataa) {
                                if ($dataa->fis8_level_id == $createHistory->fis8_level_id) {
                                    ++$cekLevel;
                                }
                            }
                            if ($cekLevel == 0) {
                                $getUser->MyUser()->update([
                        'score' => $getUser->myUser->score + $getLevel->score_reward,
                        'money' => $getUser->myUser->money + $getLevel->money_reward,
                        'ticket' => $getUser->myUser->ticket + $getLevel->ticket_reward,
                    ]);
                            }
                        }
                        ++$i;
                    }
                } else {
                    $createHistory->update([
                    'score' => rand(0, 2000),
                    'money_reward' => rand(0, 500),
                    'ticket_reward' => rand(0, 2),
                     ]);

                    $getUser->MyUser()->update([
                        'score' => $getUser->myUser->score + $createHistory->score,
                        'money' => $getUser->myUser->money + $createHistory->money_reward,
                        'ticket' => $getUser->myUser->ticket + $createHistory->ticket_reward,
                    ]);
                }
            }
        }
    }
}
