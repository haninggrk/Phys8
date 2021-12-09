<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis8QuestionAnswerImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis8_question_answer_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fis8_question_id')->references('id')->on('fis8_questions')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('fis8_answer_option_image_id')->references('id')->on('fis8_answer_option_images')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            //1=yes 0=no
            $table->enum('is_correct_answer', ['0', '1']);

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
        Schema::dropIfExists('fis8_question_answer_images');
    }
}
