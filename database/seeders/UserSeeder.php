<?php

namespace Database\Seeders;

use App\Models\Fis8Code;
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
            $createUser = ModelsUser::factory()->create();
            
            $createUser->MyUser()->create();

            $createUser->codes()->attach([
                rand(1, count(Fis8Code::all())) => ['created_at' => now()],
                rand(1, count(Fis8Code::all())) => ['created_at' => now()],
            ]);
        }
    }
}
