<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis8MyusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis8_myusers', function (Blueprint $table) {
            $table->foreignId('student_id')->references('id')->on('students')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->timestamp('email_verified_at')->nullable();
            //1=yes 0=no
            $table->enum('is_login', ['0', '1'])->default('0');
            $table->enum('is_active', ['0', '1'])->default('1');
            $table->enum('is_admin', ['0', '1'])->default('0');
            $table->bigInteger('ticket')->default(5);
            $table->bigInteger('money')->default(200);
            $table->text('photo')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('fis8_myusers');
    }
}
