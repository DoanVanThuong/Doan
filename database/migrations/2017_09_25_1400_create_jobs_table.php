<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //tạo mới bảng
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('company');
            $table->string('type');
            $table->string('year');
            $table->string('startdate');
            $table->string('enddate');
            $table->string('tag');
            $table->string('image');
            $table->string('address');
            $table->string('salary');
            $table->text('content');
            $table->string('slug');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
