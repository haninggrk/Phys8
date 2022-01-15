<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class Fis8TicketTransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $array = [];
        $getStudent = User::all();
        foreach ($getStudent as $data) {
            if ($data->myUser->is_admin == '0') {
                array_push($array, $data->id);
            }
        }

        return [
            'student_id' => $array[rand(0, count($array) - 1)],
            'add_ticket' => rand(1, 50),
            'created_at' => now(),
        ];
    }
}
