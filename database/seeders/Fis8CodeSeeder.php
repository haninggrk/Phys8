<?php

namespace Database\Seeders;

use App\Models\Fis8Code;
use Illuminate\Database\Seeder;

class Fis8CodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fis8Code::factory(10)->create();
    }
}
