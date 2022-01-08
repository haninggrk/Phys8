<?php

namespace Database\Seeders;

use App\Models\Fis8Level;
use Illuminate\Database\Seeder;

class Fis8LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Fis8Level::create([
                'fis8_category_id' => 1,
                'name' => 'Level 1',
                'description' => 'Pada level ini akan membahas ilmu fisika dasar terkait gaya atau percepatan.',
                'score_reward' => 100,
                'ticket_reward' => 2,
                'money_reward' => 200,
                'maximum_time' => 3000
                ]);

                Fis8Level::create([
                   'fis8_category_id' => 1,
                 'name' => 'Level 2',
                 'description' => 'Pada level ini akan membahas penerapan ilmu fisika dalam kehidupan sehari-hari yang berkaitan dengan gaya atau percepatan',
                 'score_reward' => 150,
                 'ticket_reward' => 3,
                 'money_reward' => 250,
                 'maximum_time' => 5000,
                  
                ]);

                Fis8Level::create([
                    'fis8_category_id' => 1,
                  'name' => 'Level 3',
                  'description' => 'Pada level ini akan membahas penerapan ilmu fisika dalam kehidupan sehari-hari yang berkaitan dengan gaya atau percepatan',
                  'score_reward' => 300,
                  'ticket_reward' => 4,
                  'money_reward' => 350,
                  'maximum_time' => 12000,
                ]);

                Fis8Level::create([
                     'fis8_category_id' => 2,
                   'name' => 'Boom Balls',
                   'description' => 'Hancurkan semua bola yang bergerak ke arahmu!. Posisimu tepat berada di tengah layar dan kamu bisa menembak bola-bola yang mendekatimu agar mereka bisa hancur secara bertahap. Berhati-hatilah karena semakin kecil bola-bola tersebut, maka semakin cepat pula pergerakan mereka',
                   'score_reward' => 150,
                   'ticket_reward' => 1,
                   'money_reward' => 150,
                 ]);
    }
}
