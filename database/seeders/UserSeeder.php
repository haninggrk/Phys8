<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; ++$i) {
            $CreateUser = ModelsUser::factory()->create();
            $CreateUser->MyUser()->create();
        }
    }
}
