<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis8QuestionImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis8_question_images', function (Blueprint $table) {
            $table->foreignId('question_id')->references('id')->on('fis8_questions')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('image_id')->references('id')->on('fis8_images')
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
        Schema::dropIfExists('fis8_question_images');
    }
}
