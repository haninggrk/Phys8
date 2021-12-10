<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fis8TicketTransaction;

class Fis8TicketTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fis8TicketTransaction::factory(20)->create();
    }
}
