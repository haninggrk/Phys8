<?php

namespace Database\Factories;

use App\Models\Fis8Level;
use Illuminate\Database\Eloquent\Factories\Factory;

class Fis8QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $getLevel = Fis8Level::all();

        return [
            'fis8_level_id' => rand(1, count($getLevel)),
            'question_text' => 'question',
            'correct_answer_option' => 'a',
            'discussion' => 'discussion',
        ];
    }
}
