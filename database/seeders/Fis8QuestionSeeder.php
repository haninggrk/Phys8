<?php

namespace Database\Seeders;

use App\Models\Fis8AnswerOption;
use App\Models\Fis8Question;
use Illuminate\Database\Seeder;
use App\Models\Fis8Image;

class Fis8QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 25; ++$i) {
            $createQuestion = Fis8Question::factory()->create();

            $createQuestion->answerOptions()->attach([
                rand(1, count(Fis8AnswerOption::all())) => [
                    'option' => 'a',
                ],
                rand(1, count(Fis8AnswerOption::all())) => [
                    'option' => 'b',
                ],
                rand(1, count(Fis8AnswerOption::all())) => [
                    'option' => 'c',
                ],
                rand(1, count(Fis8AnswerOption::all())) => [
                    'option' => 'd',
                ]
            ]);
        }
    }
        ///for ($i = 0; $i < 15; ++$i) {
         //   $createQuestion = Fis8Question::factory(30)->create();

            //  $createQuestion->images()->attach([
            //    rand(1, count(Fis8Image::all())) => [
            //  ],
            //rand(1, count(Fis8Image::all())) => [
            //],
            //]);
          //  if ($createQuestion->is_image_answer == 1) {
            //    $createQuestion->imageQuestionAnswerImages()->attach([
              //      rand(1, count(Fis8Image::all())) => [
                //        'is_correct_answer' => '0',
                  //  ],
                    //rand(1, count(Fis8Image::all())) => [
                      //  'is_correct_answer' => '0',
                    //],
                    //rand(1, count(Fis8Image::all())) => [
                      //  'is_correct_answer' => '0',
                    //],
                    //rand(1, count(Fis8Image::all())) => [
                      //  'is_correct_answer' => '1',
                    //],
                //]);
      //  }
    }

