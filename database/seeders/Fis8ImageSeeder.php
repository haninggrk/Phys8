<?php

namespace Database\Seeders;

use App\Models\Fis8Image;
use Illuminate\Database\Seeder;

class Fis8ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fis8Image::factory(5)->create();
    }
}
