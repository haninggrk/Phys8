<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Fis8AnswerOptionTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Fis8AnswerOptionText::factory(10)->create();
    }
}
