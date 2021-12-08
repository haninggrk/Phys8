<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis8RequestCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis8_request_codes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fis8_code_id')->references('id')->on('fis8_codes')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('student_id')->references('id')->on('students')
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
        Schema::dropIfExists('fis8_request_codes');
    }
}
