<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Fis8AnswerOptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'option_text' => "ini pilihan jawaban",
            'is_image' => '0'
        ];
    }
}
