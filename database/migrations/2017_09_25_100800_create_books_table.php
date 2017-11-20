<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->string('company');
            $table->string('author');
            $table->unsignedInteger('year');
            $table->unsignedInteger('category_id');
            $table->string('page');
            $table->text('sumary');
            $table->text('lang');
            $table->string('size');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
