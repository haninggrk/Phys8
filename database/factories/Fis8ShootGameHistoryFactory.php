<?php

namespace Database\Factories;

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

        return [
            'student_id' => rand(1, count($getStudent)),
        ];
    }
}