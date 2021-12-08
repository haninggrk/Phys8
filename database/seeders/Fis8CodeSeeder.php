<?php

namespace Database\Seeders;

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
        \App\Models\Fis8Code::factory(10)->create();
    }
}
