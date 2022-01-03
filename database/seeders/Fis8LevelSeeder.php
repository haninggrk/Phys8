<?php

namespace Database\Seeders;

use App\Models\Fis8Level;
use Illuminate\Database\Seeder;

class Fis8LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fis8Level::factory(10)->create();
    }
}
