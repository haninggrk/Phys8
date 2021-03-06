<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis8GamePlayHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis8_game_play_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->references('id')->on('students')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('fis8_level_id')->references('id')->on('fis8_levels')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->integer('score')->default(0);
            $table->integer('money_reward')->default(0);
            $table->integer('ticket_reward')->default(0);
            $table->integer('sum_correct_answer')->nullable();

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
        Schema::dropIfExists('fis8_game_play_histories');
    }
}
