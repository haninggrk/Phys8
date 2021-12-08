<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis8QuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis8_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('level_id')->references('id')->on('fis8_levels')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->text('question');
            $table->text('correct_answer');
            $table->text('wrong_answer1');
            $table->text('wrong_answer2');
            $table->text('wrong_answer3');


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
        Schema::dropIfExists('fis8_questions');
    }
}
