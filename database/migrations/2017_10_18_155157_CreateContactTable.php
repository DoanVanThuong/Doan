<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //tạo mới bảng
        Schema::create('contact', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('name');
            $table->integer('mssv');
            $table->integer('email');
            $table->integer('phone');
            $table->text('content');
            $table->string('file');
            $table->string('created_at');                     

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
