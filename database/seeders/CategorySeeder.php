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
        Fis8Category::create([
       'name' => 'Fast Track',
            'description' => 'Pada kategori ini terdapat beberapa level yang bisa dimainkan. Di setiap level akan ada minimal 10 soal.
             Kamu harus menjawab pertanyaan dengan benar agar bisa mendapatkan tiket, skor, ataupun dolar. Kumpulkan tiket agar kamu dapat bermain pada kategori Feazy!. Raih skor dengan sebanyak-banyaknya agar kamu bisa menduduki peringkat teratas!.
             Kamu juga bisa membeli tiket dengan dolar yang kamu miliki. 
             
             Skor yang akan diambil untuk dibandingkan dalam peringkat ialah skor yang kamu dapatkan ketika pertama kali bermain dalam setiap level. 
             Dalam setiap soal, akan ada waktu pembatas. Latihlah kecepatan berpikir kamu pada kategori ini. Selamat bermain!'

        ]);

        Fis8Category::create([
        'name' => 'Feazy',
        'description' => 'Pada kategori ini terdapat beberapa jenis permainan berbeda yang bisa dimainkan. Kamu bisa bermain dengan bebas tanpa waktu pembatas. Kamu harus menggunakan 1 tiket kamu untuk dapat bermain dalam kategori ini.
         Kamu harus bisa menyelesaikan tantangan dalam setiap permainan agar bisa mendapatkan tiket, skor, ataupun dolar. Kumpulkan tiket agar kamu dapat bermain pada kategori Feazy!. Raih skor dengan sebanyak-banyaknya agar kamu bisa menduduki peringkat teratas!.
         Kamu juga bisa membeli tiket dengan dolar yang kamu miliki.
         
         Skor yang akan diambil untuk dibandingkan dalam peringkat ialah akumulasi dari skor tertinggi yang kamu dapatkan dalam setiap jenis permainan yang terdapat pada kategori Feazy. 
         Tajamkanlah pemahaman kamu terhadap ilmu fisika dengan visualisasi yang terdapat pada setiap jenis permainan kategori Feazy. Selamat bermain!'
]);
    }
}
