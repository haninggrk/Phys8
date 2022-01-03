<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis8QuestionAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis8_question_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fis8_question_id')->references('id')->on('fis8_questions')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('fis8_answer_option_id')->references('id')->on('fis8_answer_options')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('option');

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
        Schema::dropIfExists('fis8_question_answers');
    }
}
