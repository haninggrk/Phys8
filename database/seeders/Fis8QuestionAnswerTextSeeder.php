<?php

namespace Database\Seeders;

use App\Models\Fis8AnswerOptionText;
use App\Models\Fis8Question;
use Illuminate\Database\Seeder;

class Fis8QuestionAnswerTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = Fis8Question::where('is_image_answer', '=', '0')->get();

        foreach($question as $data){
        $data->answerOptionTexts()->attach([
            rand(1, count(Fis8AnswerOptionText::all())) => [
                'is_correct_answer' => '0',
            ],
            rand(1, count(Fis8AnswerOptionText::all())) => [
                'is_correct_answer' => '0',
            ],
            rand(1, count(Fis8AnswerOptionText::all())) => [
                'is_correct_answer' => '0',
            ],
            rand(1, count(Fis8AnswerOptionText::all())) => [
                'is_correct_answer' => '1',
            ],
        ]);
        }
    }
}
