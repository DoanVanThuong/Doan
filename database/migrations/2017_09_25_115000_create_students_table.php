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
        //tạo mới bảng
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sex');
            $table->string('birth');
            $table->string('class');
            $table->string('year');
            $table->string('subject');
            $table->string('study');
            $table->string('type');
            $table->string('phone');
            $table->string('email');            
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
