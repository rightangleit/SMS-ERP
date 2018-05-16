<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StuentAttendance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stuAtten', function (Blueprint $table) {
            $table->increments('stuAtten_id');
            $table->integer('stu_id')->unsigned();
            $table->string('cr_name');
            $table->string('attenStatus');
            $table->foreign('stu_id')
                   ->references('id')
                   ->on('students')
                   ->onDelete('cascade');
         /*   $table->date('atten_date');*/       
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
        Schema::dropIfExists('stuAtten');
    }
}
