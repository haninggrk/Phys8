<?php

namespace Database\Seeders;

use App\Models\Fis8AnswerOptionText;
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
        for ($i = 0; $i < 15; ++$i) {
            $createQuestion =  \App\Models\Fis8Question::factory()->create();

            $createQuestion->images()->attach([
                rand(1, count(Fis8Image::all())) => [
                ],
                rand(1, count(Fis8Image::all())) => [
                ],
            ]);
        }
    }
}
