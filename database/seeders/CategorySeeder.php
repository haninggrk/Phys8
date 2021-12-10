<?php

namespace Database\Seeders;

use App\Models\Fis8Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fis8Category::factory(2)->create();
    }
}
