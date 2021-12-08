<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis8UserAnswerImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis8_user_answer_images', function (Blueprint $table) {
            $table->foreignId('fis8_user_answer_id')->references('id')->on('fis8_user_answers')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('fis8_image_id')->references('id')->on('fis8_images')
            ->onDelete('cascade')
            ->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fis8_user_answer_images');
    }
}
