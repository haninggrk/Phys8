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
            $table->foreignId('fis8_level_id')->references('id')->on('fis8_levels')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->text('question_text');
            $table->text('correct_answer_option');
            $table->text('discussion');

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
