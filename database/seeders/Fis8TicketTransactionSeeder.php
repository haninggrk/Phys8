<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Fis8TicketTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Fis8TicketTransaction::factory(20)->create();
    }
}
