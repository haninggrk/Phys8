<?php

namespace Database\Factories;

use App\Models\Fis8Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class Fis8LevelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $getCategory = Fis8Category::all();
        return [
            'fis8_category_id' => rand(1, count($getCategory)),
            'name' => 'testnamelevel',
            'thumbnail' => 'testthumbnaillevel',
            'description' => 'testlogdescriptionlevel',
            'score_reward' => 100,
            'ticket_reward' => 200,
            'money_reward' => 300,
            'maximum_time' => 3000,
        ];
    }
}
