<?php

namespace Database\Seeders;

use App\Models\Fis8ShootGameHistory;
use Illuminate\Database\Seeder;
use Database\Factories\Fis8ShootHistoryFactory;

class Fis8ShootHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fis8ShootGameHistory::factory(100)->create();
    }
}
