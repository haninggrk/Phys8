<?php

namespace Database\Seeders;

use App\Models\Fis8Question;
use App\Models\Fis8QuizHistory;
use Illuminate\Database\Seeder;

class Fis8QuizHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 25; ++$i) {
            $createHistory = Fis8QuizHistory::factory()->create();

            $createHistory->questions()->attach([
                rand(1, count(Fis8Question::all())) => [
                    'user_answer' => 'a',
                ],
                rand(1, count(Fis8Question::all())) => [
                    'user_answer' => 'b',
                ],
                rand(1, count(Fis8Question::all())) => [
                    'user_answer' => 'b',
                ],
                rand(1, count(Fis8Question::all())) => [
                    'user_answer' => 'c',
                ],
                rand(1, count(Fis8Question::all())) => [
                    'user_answer' => 'c',
                ]
            ]);
        }
    }
}
