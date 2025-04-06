<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table){
            $table->increments('id');
            $table->string('name',50)->nullable(false);
            $table->string('password', 15)->nullable(false);
            $table->string('email', 255)->nullable(false);
            $table->text('profile_photo_path')->nullable();
            $table->date('birth_date')->nullable(false);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
