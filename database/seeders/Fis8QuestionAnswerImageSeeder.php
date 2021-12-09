<?php

namespace Database\Seeders;

use App\Models\Fis8Question;
use Illuminate\Database\Seeder;
use App\Models\Fis8AnswerOptionImage;

class Fis8QuestionAnswerImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = Fis8Question::where('is_image_answer', '=', '1')->get();

        foreach($question as $data){
        $data->answerOptionImages()->attach([
            rand(1, count(Fis8AnswerOptionImage::all())) => [
                'is_correct_answer' => '0',
            ],
            rand(1, count(Fis8AnswerOptionImage::all())) => [
                'is_correct_answer' => '0',
            ],
            rand(1, count(Fis8AnswerOptionImage::all())) => [
                'is_correct_answer' => '0',
            ],
            rand(1, count(Fis8AnswerOptionImage::all())) => [
                'is_correct_answer' => '1',
            ],
        ]);
        }
    }
}
