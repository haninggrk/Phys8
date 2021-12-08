<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Fis8CodeSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            LevelSeeder::class,
            Fis8LogSeeder::class,
            Fis8TicketTransactionSeeder::class,
        ]);
    }
}
