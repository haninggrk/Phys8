<?php

namespace Database\Seeders;

use App\Models\Fis8History;
use App\Models\Fis8Question;
use Illuminate\Database\Seeder;

class Fis8HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 25; $i++) {
            $createHistory = Fis8History::factory()->create();

            $createHistory->questions()->attach([
                rand(1, count(Fis8Question::all())) => [
                    'user_answer' => "userAnswer",
                ],
                rand(1, count(Fis8Question::all())) => [
                    'user_answer' => "userAnswer",
                ],
                rand(1, count(Fis8Question::all())) => [
                    'user_answer' => "userAnswer",
                ],
                rand(1, count(Fis8Question::all())) => [
                    'user_answer' => "userAnswer",
                ],
                rand(1, count(Fis8Question::all())) => [
                    'user_answer' => "userAnswer",
                ],
                rand(1, count(Fis8Question::all())) => [
                    'user_answer' => "userAnswer",
                ],
                rand(1, count(Fis8Question::all())) => [
                    'user_answer' => "userAnswer",
                ],
                rand(1, count(Fis8Question::all())) => [
                    'user_answer' => "userAnswer",
                ],
                rand(1, count(Fis8Question::all())) => [
                    'user_answer' => "userAnswer",
                ],
                rand(1, count(Fis8Question::all())) => [
                    'user_answer' => "userAnswer",
                ],
            ]);
        }
    }
}
