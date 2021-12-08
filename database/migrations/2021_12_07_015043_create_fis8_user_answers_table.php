<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis8UserAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis8_user_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->references('id')->on('students')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('fis8_question_id')->references('id')->on('fis8_questions')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('fis8_history_id')->references('id')->on('fis8_histories')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fis8_user_answers');
    }
}
