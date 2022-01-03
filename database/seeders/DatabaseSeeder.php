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
            UserSeeder::class,
            CategorySeeder::class,
            Fis8LevelSeeder::class,
            Fis8LogSeeder::class,
            Fis8TicketTransactionSeeder::class,
            Fis8AnswerOptionSeeder::class,
            Fis8QuestionSeeder::class,
            Fis8QuizHistorySeeder::class,
        ]);
    }
}
