<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fis8AnswerOptionText;

class Fis8AnswerOptionTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fis8AnswerOptionText::factory(10)->create();
    }
}
