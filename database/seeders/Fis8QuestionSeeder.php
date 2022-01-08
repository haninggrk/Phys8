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
          'discussion' => 'Gerak lurus beraturan tidak dipengaruhi oleh percepatan dan nilai percepatannya adalah 0.',
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
        ]);

        ///////////////

        $createQuestion = $level->questions()->create([
          'question_text' => 'Salah satu contoh gaya tak sentuh adalah…',
          'correct_answer_option' => 'a',
          'discussion' => 'Gaya berat merupakan gaya yang terjadi tanpa harus melalui sentuhan. Sedangkan gaya gesek terjadi akibat benda-benda yang saling bersentuhan',
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

       //ganti
       $createQuestion = $level->questions()->create([
        'question_text' => 'Jika terdapat dua buah gaya masing-masing besarnya 150N dan 80N. Kedua gaya tersebut bekerja pada sebuah benda. Maka besar resultan dari kedua gaya tersebut adalah...',
        'correct_answer_option' => 'b',
        'discussion' => 'd',
      ]);

        $createAnswerOption1 = Fis8AnswerOption::create([
        'option_text' => '230 N jika kedua gaya berlawanan arah',
        'is_image' => '0',
      ]);

        $createAnswerOption2 = Fis8AnswerOption::create([
        'option_text' => '230 N jika kedua gaya searah',
        'is_image' => '0',
      ]);

        $createAnswerOption3 = Fis8AnswerOption::create([
        'option_text' => '70 N jika kedua gaya searah',
        'is_image' => '0',
      ]);

        $createAnswerOption4 = Fis8AnswerOption::create([
        'option_text' => '70 N jika kedua gaya berlawanan arah',
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
        'question_text' => 'Alat yang digunakan untuk mengukur gaya adalah...',
        'correct_answer_option' => 'a',
        'discussion' => 'd',
      ]);

  $createAnswerOption1 = Fis8AnswerOption::create([
        'option_text' => 'Dinamometer',
        'is_image' => '0',
      ]);

  $createAnswerOption2 = Fis8AnswerOption::create([
        'option_text' => 'Barometer',
        'is_image' => '0',
      ]);

  $createQuestion->answerOptions()->attach([
          $createAnswerOption1->id => [
              'option' => 'a',
          ],
          $createAnswerOption2->id => [
            'option' => 'b',
          ]
      ]);

            /////////level2////

            $level = Fis8Level::find(2);

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

            $createQuestion = $level->questions()->create([
              'question_text' => 'Sebuah mobil dengan massa 3 ton dalam keadaan diam, kemudian melaju selama 30 detik dengan kecepatan 18 km/jam. Berapakah gaya yang dikerjakan oleh mobil tersebut?',
              'correct_answer_option' => 'd',
              'discussion' => 'Diketahui:
              m = 3 ton = 3000 kg (konversi massa)
              v1 = 0
              v2= 18 km/jam = 5 m/s
              t = 30s

              Terlebih dahulu kamu harus mencari berapa besarnya percepatan mobil tersebut, yakni:
              a = (v2-v1)/t
              a = (5 m/s - 0 m/s)/30 s
              a = 5/30 m/s/s

              Sekarang hitung gaya yang dikerjakan oleh mobil dengan rumus hukum II Newton, yaitu:
              F = m.a
              F = 3000 kg. (5/30) m/s/s
              F = 500 N
              
              Jadi, gaya yang harus dikerjakan oleh obil tersebut adalah 500 N
              ',
            ]);
      
              $createAnswerOption1 = Fis8AnswerOption::create([
              'option_text' => '480 N',
              'is_image' => '0',
            ]);
      
              $createAnswerOption2 = Fis8AnswerOption::create([
              'option_text' => '485 N',
              'is_image' => '0',
            ]);
      
              $createAnswerOption3 = Fis8AnswerOption::create([
              'option_text' => '495 N',
              'is_image' => '0',
            ]);
      
              $createAnswerOption4 = Fis8AnswerOption::create([
              'option_text' => '500 N',
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
              'question_text' => 'Berat suatu benda 34,3 N. Jika percepatan gravitasi 9.8 N/kg, maka berapakah massa benda tersebut?',
              'correct_answer_option' => 'b',
              'discussion' => 'Diketahui:
              w = 34.3 N
              g = 9.8 m/s/s
              
              w = m.g => m = w/g
              m = 34.3 N/(9.8 m/s/s)
              m = 3.5 kg
              
              Jadi massa benda adalah 3.5 kg',
            ]);
      
              $createAnswerOption1 = Fis8AnswerOption::create([
              'option_text' => '3.5 g',
              'is_image' => '0',
            ]);
      
              $createAnswerOption2 = Fis8AnswerOption::create([
              'option_text' => '3.5 kg',
              'is_image' => '0',
            ]);
      
              $createAnswerOption3 = Fis8AnswerOption::create([
              'option_text' => '4.5 g',
              'is_image' => '0',
            ]);
      
              $createAnswerOption4 = Fis8AnswerOption::create([
              'option_text' => '4.5 kg',
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
              'question_text' => 'Massa Eli di bumi 60 kg. Jika percepatan gravitasi bumi 10 N/kg dan percepatan gravitasi bulan 1/6 percepatan gravitasi bumi, berapakah berat Eli di bumi?',
              'correct_answer_option' => 'a',
              'discussion' => 'Diketahui:
              m = 60 kg
              gbumi = 10 N/kg
              
              wbumi = m.gbumi
              wbumi = 60 kg. 10 N/kg
              wbumi = 600 N
              
              Jadi berat Eli di bumi ialah 600 N',
            ]);
      
              $createAnswerOption1 = Fis8AnswerOption::create([
              'option_text' => '600 N',
              'is_image' => '0',
            ]);
      
              $createAnswerOption2 = Fis8AnswerOption::create([
              'option_text' => '500 N',
              'is_image' => '0',
            ]);
      
              $createAnswerOption3 = Fis8AnswerOption::create([
              'option_text' => '100 N',
              'is_image' => '0',
            ]);
      
              $createAnswerOption4 = Fis8AnswerOption::create([
              'option_text' => '150 N',
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
                  'question_text' => 'Massa Eli di bumi 60 kg. Jika percepatan gravitasi bumi 10 N/kg dan percepatan gravitasi bulan 1/6 percepatan gravitasi bumi, berapakah berat Eli di bulan?',
                  'correct_answer_option' => 'c',
                  'discussion' => 'Diketahui:
                  m = 60 kg
                  gbumi = 10 N/kg
                  
                  wbulan = m.gbulan
                  wbulan = m.(1/6) gbumi
                  wbulan = (1/6).m.gbumi
                  wbulan = (1/6).60 kg.10 N/kg
                  wbulan = 100 N
                  
                  Jadi berat Eli di bulan ialah 100 N',
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
              'question_text' => 'Pak Wahyu mendorong gerobak yang memiliki massa 40 kg dengan gaya sebesar 100 N, kemudian pak wahyu membeli 2 karung beras yang massanya 30 kg tiap karungnya. Berapakah gaya yang harus dikeluarkan oleh pak wahyu agar gerobak tersebut bergerak dengan percepatan yang sama?',
              'correct_answer_option' => 'd',
              'discussion' => 'Diketahui:
              m1 = 40 kg
              F1 = 100 N
              m2 = 100 kg
              
              Dengan konsep hukum II Newton
              a1 = F1/m1
              a1 = 100 N/40 kg
              a1 = 2.5 N/kg
              
              F2 = m2.a2 => a2 = a1
              F2 = m2.a1
              F2 = 100 kg.(2.5 N/kg)
              F2 = 250 N

              Dengan konsep perbandngan senilai atau seharga:
              F2/m2 = F1/m1
              F2/100 kg = 100 N/40 kg
              F2 = 100 N.100 kg/40kg
              F2 = 250 N

              Jadi gaya yang harus dikeluarkan oleh pak Wahyu agar gerobak tersebut bergerak dengan percepatan yang sama adalah 250 N
              ',
            ]);
      
              $createAnswerOption1 = Fis8AnswerOption::create([
              'option_text' => '150 N',
              'is_image' => '0',
            ]);
      
              $createAnswerOption2 = Fis8AnswerOption::create([
              'option_text' => '600 N',
              'is_image' => '0',
            ]);
      
              $createAnswerOption3 = Fis8AnswerOption::create([
              'option_text' => '400 N',
              'is_image' => '0',
            ]);
      
              $createAnswerOption4 = Fis8AnswerOption::create([
              'option_text' => '250 N',
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
                    'question_text' => 'Sebuah mobil bermassa 1500 kg bergerak dengan laju 72 km/jam. Ketika mobil mulai direm untuk mendapatkan perlambatan konstan, mobil berhenti dalam selang waktu 1.25 menit. Berapakah besar gaya pengereman yang bekerja pada mobil tersebut?',
                    'correct_answer_option' => 'b',
                    'discussion' => 'd',
                  ]);
            
                    $createAnswerOption1 = Fis8AnswerOption::create([
                    'option_text' => '400 N',
                    'is_image' => '0',
                  ]);
            
                    $createAnswerOption2 = Fis8AnswerOption::create([
                    'option_text' => '-400 N',
                    'is_image' => '0',
                  ]);
            
                    $createAnswerOption3 = Fis8AnswerOption::create([
                    'option_text' => '600 N',
                    'is_image' => '0',
                  ]);
            
                    $createAnswerOption4 = Fis8AnswerOption::create([
                    'option_text' => '-600 N',
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
                    'question_text' => 'Kotak 10 kg mula-mula diam pada bidang miring dengan kemiringan 30 derajat terhadap arah horizontal. Kotak bergerak meluncur pada bidang miring tersebut sejauh 10 m. Jika bidang miring tersebut licin, berapakah laju akhir dari kotak tersebut?',
                    'correct_answer_option' => 'a',
                    'discussion' => 'd',
                  ]);
            
                    $createAnswerOption1 = Fis8AnswerOption::create([
                    'option_text' => '10 m/s',
                    'is_image' => '0',
                  ]);
            
                    $createAnswerOption2 = Fis8AnswerOption::create([
                    'option_text' => '10 m/s/s',
                    'is_image' => '0',
                  ]);
            
                    $createAnswerOption3 = Fis8AnswerOption::create([
                    'option_text' => '100 m/s',
                    'is_image' => '0',
                  ]);
            
                    $createAnswerOption4 = Fis8AnswerOption::create([
                    'option_text' => '100 m/s/s',
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
                    'question_text' => 'Benda 1 kg mula-mula diletakkan di tanah, kemudian diberi gaya 14 N vertikal ke atas selama 5 detik. Berapakah tinggi maksimum yang dicapai oleh benda tersebut?',
                    'correct_answer_option' => 'a',
                    'discussion' => 'd',
                  ]);
            
                    $createAnswerOption1 = Fis8AnswerOption::create([
                    'option_text' => '70 m',
                    'is_image' => '0',
                  ]);
            
                    $createAnswerOption2 = Fis8AnswerOption::create([
                    'option_text' => '80 m',
                    'is_image' => '0',
                  ]);
            
                    $createAnswerOption3 = Fis8AnswerOption::create([
                    'option_text' => '90 m',
                    'is_image' => '0',
                  ]);
            
                    $createAnswerOption4 = Fis8AnswerOption::create([
                    'option_text' => '100 m',
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

                   $level = Fis8Level::find(3);
                
                   $createQuestion = $level->questions()->create([
                    'question_text' => 'Seorang anak bermassa 60 kg menaiki lift di sebuah gedung mall dan percepatan gravitasi bumi sebesar 10 m/s/s. Berapakah gaya desak kaki anak tersebut pada lantai lift ketika lift bergerak dengan percepatan 1.5 m/s/s ke atas?',
                    'correct_answer_option' => 'd',
                    'discussion' => 'd',
                  ]);
            
                    $createAnswerOption1 = Fis8AnswerOption::create([
                    'option_text' => '490 N',
                    'is_image' => '0',
                  ]);
            
                    $createAnswerOption2 = Fis8AnswerOption::create([
                    'option_text' => '590 N',
                    'is_image' => '0',
                  ]);
            
                    $createAnswerOption3 = Fis8AnswerOption::create([
                    'option_text' => '690 N',
                    'is_image' => '0',
                  ]);
            
                    $createAnswerOption4 = Fis8AnswerOption::create([
                    'option_text' => '790 N',
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
                    'question_text' => 'Seorang anak bermassa 60 kg menaiki lift di sebuah gedung mall dan percepatan gravitasi bumi sebesar 10 m/s/s. Berapakah gaya desak kaki anak tersebut pada lantai lift ketika lift bergerak dengan percepatan 1.5 m/s/s ke bawah?',
                    'correct_answer_option' => 'b',
                    'discussion' => 'd',
                  ]);
            
                    $createAnswerOption1 = Fis8AnswerOption::create([
                    'option_text' => '410 N',
                    'is_image' => '0',
                  ]);
            
                    $createAnswerOption2 = Fis8AnswerOption::create([
                    'option_text' => '510 N',
                    'is_image' => '0',
                  ]);
            
                    $createAnswerOption3 = Fis8AnswerOption::create([
                    'option_text' => '610 N',
                    'is_image' => '0',
                  ]);
            
                    $createAnswerOption4 = Fis8AnswerOption::create([
                    'option_text' => '710 N',
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
                'question_text' => 'Seorang anak bermassa 60 kg menaiki lift di sebuah gedung mall dan percepatan gravitasi bumi sebesar 10 m/s/s. Berapakah gaya desak kaki anak tersebut pada lantai lift ketika lift bergerak dengan kecepatan tetap 1 m/s ke atas?',
                'correct_answer_option' => 'a',
                'discussion' => 'd',
              ]);
        
                $createAnswerOption1 = Fis8AnswerOption::create([
                'option_text' => '600 N',
                'is_image' => '0',
              ]);
        
                $createAnswerOption2 = Fis8AnswerOption::create([
                'option_text' => '500 N',
                'is_image' => '0',
              ]);
        
                $createAnswerOption3 = Fis8AnswerOption::create([
                'option_text' => '400 N',
                'is_image' => '0',
              ]);
        
                $createAnswerOption4 = Fis8AnswerOption::create([
                'option_text' => '300 N',
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
                'question_text' => 'Seorang anak bermassa 60 kg menaiki lift di sebuah gedung mall dan percepatan gravitasi bumi sebesar 10 m/s/s. Berapakah gaya desak kaki anak tersebut pada lantai lift ketika lift bergerak dengan kecepatan tetap 1 m/s ke bawah?',
                'correct_answer_option' => 'b',
                'discussion' => 'd',
              ]);
        
                $createAnswerOption1 = Fis8AnswerOption::create([
                'option_text' => '400 N',
                'is_image' => '0',
              ]);
        
                $createAnswerOption2 = Fis8AnswerOption::create([
                'option_text' => '600 N',
                'is_image' => '0',
              ]);
        
                $createAnswerOption3 = Fis8AnswerOption::create([
                'option_text' => '500 N',
                'is_image' => '0',
              ]);
        
                $createAnswerOption4 = Fis8AnswerOption::create([
                'option_text' => '300 N',
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
                'question_text' => 'Seorang anak bermassa 60 kg menaiki lift di sebuah gedung mall dan percepatan gravitasi bumi sebesar 10 m/s/s. Berapakah gaya desak kaki anak tersebut pada lantai lift ketika lift telah berhenti kembali?',
                'correct_answer_option' => 'a',
                'discussion' => 'd',
              ]);
        
                $createAnswerOption1 = Fis8AnswerOption::create([
                'option_text' => '600 N',
                'is_image' => '0',
              ]);
        
                $createAnswerOption2 = Fis8AnswerOption::create([
                'option_text' => '500 N',
                'is_image' => '0',
              ]);
        
                $createAnswerOption3 = Fis8AnswerOption::create([
                'option_text' => '400 N',
                'is_image' => '0',
              ]);
        
                $createAnswerOption4 = Fis8AnswerOption::create([
                'option_text' => '300 N',
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
                'question_text' => 'Pada saat bermain kelereng, kelereng yang kecil saat dimainkan akan lebih cepat menggelinding, sedangkan kelereng yang lebih besar relatif lebih lama. Hal tersebut dikarenakan percepatan berbanding terblik dengan massanya. Apakah pernyataan tersebut benar?',
                'correct_answer_option' => 'a',
                'discussion' => 'd',
              ]);
        
                $createAnswerOption1 = Fis8AnswerOption::create([
                'option_text' => 'Ya',
                'is_image' => '0',
              ]);
        
                $createAnswerOption2 = Fis8AnswerOption::create([
                'option_text' => 'Tidak',
                'is_image' => '0',
              ]);
        
                $createQuestion->answerOptions()->attach([
                  $createAnswerOption1->id => [
                      'option' => 'a',
                  ],
                  $createAnswerOption2->id => [
                    'option' => 'b',
                ],
              ]);

              $createQuestion = $level->questions()->create([
                'question_text' => 'Sebuah truk dapat menghasilkan gaya sebesar 7000 N. Jika truk tersebut dapat bergerak dengan percepatan 3.5 m/s/s, berapakah massa truk tersebut?',
                'correct_answer_option' => 'd',
                'discussion' => 'd',
              ]);
        
              $createAnswerOption1 = Fis8AnswerOption::create([
                'option_text' => '7 ton',
                'is_image' => '0',
              ]);
        
                $createAnswerOption2 = Fis8AnswerOption::create([
                'option_text' => '8 ton',
                'is_image' => '0',
              ]);
        
                $createAnswerOption3 = Fis8AnswerOption::create([
                'option_text' => '1 ton',
                'is_image' => '0',
              ]);
        
                $createAnswerOption4 = Fis8AnswerOption::create([
                'option_text' => '2 ton',
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
                  'question_text' => 'Jika suatu benda diberi gaya 20 N, benda tersebut memiliki percepatan 4 m/s/s. Berapakah percepatan yang dialami benda tersebut jika diberi gaya 25 N?',
                  'correct_answer_option' => 'b',
                  'discussion' => 'd',
                ]);
          
                $createAnswerOption1 = Fis8AnswerOption::create([
                  'option_text' => '10 m/s/s',
                  'is_image' => '0',
                ]);
          
                  $createAnswerOption2 = Fis8AnswerOption::create([
                  'option_text' => '5 m/s/s',
                  'is_image' => '0',
                ]);
          
                  $createAnswerOption3 = Fis8AnswerOption::create([
                  'option_text' => '15 m/s/s',
                  'is_image' => '0',
                ]);
          
                  $createAnswerOption4 = Fis8AnswerOption::create([
                  'option_text' => '20 m/s/s',
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
                  'question_text' => 'Sebuah gaya F dikerjakan pada sebuah benda bermassa m, menghasilkan percepatan 10 m/s/s. Jika gaya tersebut dikerjakan pada benda kedua dengan massa m2, percepatan yang dihasilkan adalah 15 m/s/s. Berapakah perbandingan m1 dan m2?',
                  'correct_answer_option' => 'c',
                  'discussion' => 'd',
                ]);
          
                $createAnswerOption1 = Fis8AnswerOption::create([
                  'option_text' => '3:4',
                  'is_image' => '0',
                ]);
          
                  $createAnswerOption2 = Fis8AnswerOption::create([
                  'option_text' => '4:3',
                  'is_image' => '0',
                ]);
          
                  $createAnswerOption3 = Fis8AnswerOption::create([
                  'option_text' => '3:2',
                  'is_image' => '0',
                ]);
          
                  $createAnswerOption4 = Fis8AnswerOption::create([
                  'option_text' => '2:3',
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

                  //baru

                  $createQuestion = $level->questions()->create([
                    'question_text' => 'Sebuah gaya F dikerjakan pada sebuah benda bermassa m, menghasilkan percepatan 10 m/s/s. Jika gaya tersebut dikerjakan pada benda kedua dengan massa m2, percepatan yang dihasilkan adalah 15 m/s/s. Berapakah percepatan yang dihasilkan gaya F1, apabila m1 dan m2 digabung?',
                    'correct_answer_option' => 'b',
                    'discussion' => 'd',
                  ]);
            
                  $createAnswerOption1 = Fis8AnswerOption::create([
                    'option_text' => '5 m/s/s',
                    'is_image' => '0',
                  ]);
            
                    $createAnswerOption2 = Fis8AnswerOption::create([
                    'option_text' => '6 m/s/s',
                    'is_image' => '0',
                  ]);
            
                    $createAnswerOption3 = Fis8AnswerOption::create([
                    'option_text' => '7 m/s/s',
                    'is_image' => '0',
                  ]);
            
                    $createAnswerOption4 = Fis8AnswerOption::create([
                    'option_text' => '8 m/s/s',
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
