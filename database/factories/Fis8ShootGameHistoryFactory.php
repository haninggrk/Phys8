<?php

namespace Database\Factories;

use App\Models\Fis8Level;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class Fis8ShootGameHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $getStudent = User::all();
        $getLevel = Fis8Level::all();

        return [
            'student_id' => rand(1, count($getStudent)),
            'fis8_level_id' => rand(1, count($getLevel)),
            'score' => rand(0, 2000),
            'money_reward' => rand(0, 500),
            'ticket_reward' => rand(0,2)
        ];
    }
}
