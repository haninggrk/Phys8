<?php

namespace Database\Seeders;

use App\Models\Fis8AnswerOptionImage;
use Illuminate\Database\Seeder;

class Fis8AnswerOptionImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fis8AnswerOptionImage::factory(10)->create();
    }
}
