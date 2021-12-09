<?php

namespace Database\Factories;

use App\Models\Fis8Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class Fis8AnswerOptionImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $getImage = Fis8Image::all();
        return [
                'fis8_image_id' => rand(1, count($getImage)),
        ];
    }
}
