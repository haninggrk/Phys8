<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis8LevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis8_levels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fis8_category_id')->references('id')->on('fis8_categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->string('name');
            $table->text('thumbnail');
            $table->text('description')->nullable();
            $table->integer('score_reward');
            $table->integer('ticket_reward');
            $table->integer('money_reward');
            $table->integer('maximum_time');

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
        Schema::dropIfExists('fis8_levels');
    }
}
