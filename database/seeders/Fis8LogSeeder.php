<?php

namespace Database\Seeders;

use App\Models\Fis8Log;
use Illuminate\Database\Seeder;

class Fis8LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fis8Log::factory(10)->create();
    }
}
