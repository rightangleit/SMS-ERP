<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
           
            $table->string('gname');
            $table->string('goccup');
            $table->string('gphone');
            $table->string('sphone');
            $table->date('sdob');
            $table->string('sblood');
            $table->string('sclass');
            $table->string('ssection');
            $table->string('sgroup');
            $table->string('sshift');
            $table->string('speradd');
            $table->string('spreadd');
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
        Schema::dropIfExists('students');
    }
}
