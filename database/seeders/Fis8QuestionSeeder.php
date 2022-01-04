<?php

namespace Database\Seeders;

use App\Models\Fis8AnswerOption;
use App\Models\Fis8Question;
use Illuminate\Database\Seeder;
use App\Models\Fis8Image;
use App\Models\Fis8Level;

class Fis8QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level = Fis8Level::find(1);

        $createQuestion = $level->questions()->create([
              'question_text' => 'Manakah di bawah ini yang merupakan bunyi hukum III newton yang benar?',
              'correct_answer_option' => 'b',
              'discussion' => 'b',
            ]);

        $createAnswerOption1 = Fis8AnswerOption::create([
              'option_text' => 'Setiap benda cenderung mempertahankan keadaannya, yaitu tetap diam atau tetap bergerak dengan keceptan konstan',
              'is_image' => '0',
            ]);

        $createAnswerOption2 = Fis8AnswerOption::create([
              'option_text' => 'Setiap ada gaya aksi maka selalu ada gaya reaksi yang besarnya sama tetapi berlawanan arah',
              'is_image' => '0',
            ]);

        $createAnswerOption3 = Fis8AnswerOption::create([
              'option_text' => 'Setiap ada gaya aksi maka selalu ada gaya reaksi yang besar dan arahnya sama',
              'is_image' => '0',
            ]);

        $createAnswerOption4 = Fis8AnswerOption::create([
              'option_text' => 'Sebuah benda yang dikenai gaya akan mengalami percepatan yang besarnya berbanding lurus dengan besar gaya dan berbanding terbalik dengan massa benda',
              'is_image' => '0',
            ]);

        $createQuestion->answerOptions()->attach([
                $createAnswerOption1->id => [
                    'option' => 'a',
                ],
                $createAnswerOption2->id => [
                  'option' => 'b',
              ],
              $createAnswerOption3->id => [
                'option' => 'c',
            ],
            $createAnswerOption4->id => [
              'option' => 'd',
          ],
            ]);

        $createQuestion = $level->questions()->create([
              'question_text' => 'Manakah di bawah ini yang merupakan bunyi hukum I newton yang benar?',
              'correct_answer_option' => 'a',
              'discussion' => 'a',
            ]);

        $createQuestion->answerOptions()->attach([
              $createAnswerOption1->id => [
                  'option' => 'a',
              ],
              $createAnswerOption2->id => [
                'option' => 'b',
            ],
            $createAnswerOption3->id => [
              'option' => 'c',
          ],
          $createAnswerOption4->id => [
            'option' => 'd',
        ],
          ]);

        $createQuestion = $level->questions()->create([
            'question_text' => 'Manakah di bawah ini yang bukan merupakan bunyi hukum newton ?',
            'correct_answer_option' => 'c',
            'discussion' => 'c',
          ]);

        $createQuestion->answerOptions()->attach([
            $createAnswerOption1->id => [
                'option' => 'a',
            ],
            $createAnswerOption2->id => [
              'option' => 'b',
          ],
          $createAnswerOption3->id => [
            'option' => 'c',
        ],
        $createAnswerOption4->id => [
          'option' => 'd',
      ],
        ]);

        $createQuestion = $level->questions()->create([
          'question_text' => 'Manakah di bawah ini yang merupakan bunyi hukum II newton?',
          'correct_answer_option' => 'd',
          'discussion' => 'd',
        ]);

        $createQuestion->answerOptions()->attach([
          $createAnswerOption1->id => [
              'option' => 'a',
          ],
          $createAnswerOption2->id => [
            'option' => 'b',
        ],
        $createAnswerOption3->id => [
          'option' => 'c',
      ],
      $createAnswerOption4->id => [
        'option' => 'd',
    ],
      ]);

        $createQuestion = $level->questions()->create([
        'question_text' => 'Setelah Budi menimbang badan di atas timbangan, ia mengatakan berat badannya 50 kg. Manakah pernyataan di bawah ini yang benar?',
        'correct_answer_option' => 'd',
        'discussion' => 'd',
      ]);

        $createAnswerOption1 = Fis8AnswerOption::create([
        'option_text' => 'Budi mengatakan perkataan yang salah. Karena satuan berat ialah Newton, bukan kg. Sebenarnya Budi sedang menimbang massa dari tubuhnya',
        'is_image' => '0',
      ]);

        $createAnswerOption2 = Fis8AnswerOption::create([
        'option_text' => 'Budi mengatakan perkataan yang benar. Karena kg merupakan satuan berat dan berat benda sama dengan massa benda',
        'is_image' => '0',
      ]);

        $createAnswerOption3 = Fis8AnswerOption::create([
        'option_text' => 'Budi mengatakan perkataan yang salah. Karena kg merupakan satuan berat dan berat tidak selalu sama dengan massa',
        'is_image' => '0',
      ]);

        $createAnswerOption4 = Fis8AnswerOption::create([
        'option_text' => 'Budi mengatakan perkataan yang salah. Karena satuan berat ialah Newton, bukan kg. Sebenarnya Budi sedang menimbang massa dari tubuhnya',
        'is_image' => '0',
      ]);

        $createQuestion->answerOptions()->attach([
          $createAnswerOption1->id => [
              'option' => 'a',
          ],
          $createAnswerOption2->id => [
            'option' => 'b',
        ],
        $createAnswerOption3->id => [
          'option' => 'c',
      ],
      $createAnswerOption4->id => [
        'option' => 'd',
    ],
      ]);

        ////////////////////////
        $createQuestion = $level->questions()->create([
          'question_text' => 'Rumus gaya gesek yaitu Fg = u * N. Manakah pernyataan dibawah ini yang benar untuk N ?',
          'correct_answer_option' => 'a',
          'discussion' => 'a',
        ]);

        $createAnswerOption1 = Fis8AnswerOption::create([
          'option_text' => 'N ialah gaya normal',
          'is_image' => '0',
        ]);

        $createAnswerOption2 = Fis8AnswerOption::create([
          'option_text' => 'N = mg',
          'is_image' => '0',
        ]);

        $createAnswerOption3 = Fis8AnswerOption::create([
          'option_text' => 'N = mg + F',
          'is_image' => '0',
        ]);

        $createAnswerOption4 = Fis8AnswerOption::create([
          'option_text' => 'N adalah gaya dorong',
          'is_image' => '0',
        ]);

        $createQuestion->answerOptions()->attach([
            $createAnswerOption1->id => [
                'option' => 'a',
            ],
            $createAnswerOption2->id => [
              'option' => 'b',
          ],
          $createAnswerOption3->id => [
            'option' => 'c',
        ],
        $createAnswerOption4->id => [
          'option' => 'd',
      ],
        ]);

        ///////////////

        $createQuestion = $level->questions()->create([
          'question_text' => 'Manakah faktor di bawah ini yang mempengaruhi gerak lurus beraturan ?',
          'correct_answer_option' => 'a',
          'discussion' => 'a',
        ]);

        $createAnswerOption1 = Fis8AnswerOption::create([
          'option_text' => 'Kecepatan',
          'is_image' => '0',
        ]);

        $createAnswerOption2 = Fis8AnswerOption::create([
          'option_text' => 'Percepatan',
          'is_image' => '0',
        ]);

        $createAnswerOption3 = Fis8AnswerOption::create([
          'option_text' => 'Gaya gerak',
          'is_image' => '0',
        ]);

        $createAnswerOption4 = Fis8AnswerOption::create([
          'option_text' => 'Gaya gesek',
          'is_image' => '0',
        ]);

        $createQuestion->answerOptions()->attach([
            $createAnswerOption1->id => [
                'option' => 'a',
            ],
            $createAnswerOption2->id => [
              'option' => 'b',
          ],
          $createAnswerOption3->id => [
            'option' => 'c',
        ],
        $createAnswerOption4->id => [
          'option' => 'd',
      ],
        ]);

        ///////////////

        $createQuestion = $level->questions()->create([
          'question_text' => 'Salah satu contoh gaya tak sentuh adalah…',
          'correct_answer_option' => 'a',
          'discussion' => 'a',
        ]);

        $createAnswerOption1 = Fis8AnswerOption::create([
          'option_text' => 'Gaya berat',
          'is_image' => '0',
        ]);

        $createQuestion->answerOptions()->attach([
            $createAnswerOption1->id => [
                'option' => 'a',
            ],
            $createAnswerOption4->id => [
              'option' => 'b',
            ],
        ]);

        ///////////////

        $createQuestion = $level->questions()->create([
            'question_text' => 'Suatu benda dikatakan dalam keadaan seimbang jika pada benda tersebut...',
            'correct_answer_option' => 'b',
            'discussion' => 'b',
          ]);

        $createAnswerOption1 = Fis8AnswerOption::create([
            'option_text' => 'Terdapat sejumlah gaya yang besarnya sama',
            'is_image' => '0',
          ]);

        $createAnswerOption2 = Fis8AnswerOption::create([
            'option_text' => 'Resultan seluruh gaya yang bekerja sama dengan nol',
            'is_image' => '0',
          ]);

        $createAnswerOption3 = Fis8AnswerOption::create([
            'option_text' => 'Terdapat dua gaya yang searah',
            'is_image' => '0',
          ]);

        $createAnswerOption4 = Fis8AnswerOption::create([
            'option_text' => 'Terdapat empat gaya yang searah',
            'is_image' => '0',
          ]);

        $createQuestion->answerOptions()->attach([
              $createAnswerOption1->id => [
                  'option' => 'a',
              ],
              $createAnswerOption2->id => [
                'option' => 'b',
              ],
              $createAnswerOption3->id => [
                'option' => 'c',
            ],
            $createAnswerOption4->id => [
              'option' => 'd',
            ],
          ]);

        ///////////////

        $createQuestion = $level->questions()->create([
              'question_text' => 'Contoh gaya gesek yang menguntungkan adalah...',
              'correct_answer_option' => 'd',
              'discussion' => 'd',
            ]);

        $createAnswerOption1 = Fis8AnswerOption::create([
              'option_text' => 'Gesekan antara kapal selam dengan air',
              'is_image' => '0',
            ]);

        $createAnswerOption2 = Fis8AnswerOption::create([
              'option_text' => 'Gesekan antara pesawat terbang dengan udara',
              'is_image' => '0',
            ]);

        $createAnswerOption3 = Fis8AnswerOption::create([
              'option_text' => 'Gesekan antara mesin kendaraan',
              'is_image' => '0',
            ]);

        $createAnswerOption4 = Fis8AnswerOption::create([
              'option_text' => 'Gesekan antara rem dengan pinggiran roda',
              'is_image' => '0',
            ]);

        $createQuestion->answerOptions()->attach([
                $createAnswerOption1->id => [
                    'option' => 'a',
                ],
                $createAnswerOption2->id => [
                  'option' => 'b',
                ],
                $createAnswerOption3->id => [
                  'option' => 'c',
              ],
              $createAnswerOption4->id => [
                'option' => 'd',
              ],
            ]);
    }
    ///for ($i = 0; $i < 15; ++$i) {
         //   $createQuestion = Fis8Question::factory(30)->create();

            //  $createQuestion->images()->attach([
            //    rand(1, count(Fis8Image::all())) => [
            //  ],
            //rand(1, count(Fis8Image::all())) => [
            //],
            //]);
          //  if ($createQuestion->is_image_answer == 1) {
            //    $createQuestion->imageQuestionAnswerImages()->attach([
              //      rand(1, count(Fis8Image::all())) => [
                //        'is_correct_answer' => '0',
                  //  ],
                    //rand(1, count(Fis8Image::all())) => [
                      //  'is_correct_answer' => '0',
                    //],
                    //rand(1, count(Fis8Image::all())) => [
                      //  'is_correct_answer' => '0',
                    //],
                    //rand(1, count(Fis8Image::all())) => [
                      //  'is_correct_answer' => '1',
                    //],
                //]);
      //  }
}
