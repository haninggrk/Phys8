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
            Fis8CategorySeeder::class,
            Fis8LevelSeeder::class,
            Fis8QuestionSeeder::class,
            UserSeeder::class,
            //Fis8LogSeeder::class,
            Fis8TicketTransactionSeeder::class,
           // Fis8AnswerOptionSeeder::class,
        ]);
    }
}
