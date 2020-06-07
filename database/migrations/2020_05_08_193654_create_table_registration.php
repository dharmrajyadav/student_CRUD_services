<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRegistration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_registration', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('age');
            $table->string('courseType');
            $table->date('address');
            $table->integer('country');
            $table->string('city');
            $table->date('mobile');
            $table->date('email');
            $table->date('password');
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
        Schema::dropIfExists('student_registration');
    }
}
