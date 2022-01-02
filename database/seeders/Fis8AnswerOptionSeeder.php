<?php

namespace Database\Seeders;

use App\Models\Fis8AnswerOption;
use Illuminate\Database\Seeder;

class Fis8AnswerOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fis8AnswerOption::factory(40)->create();
    }
}
