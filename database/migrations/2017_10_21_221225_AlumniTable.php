<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlumniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('alumni', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');            
            $table->text('info');
            $table->integer('business');
            $table->string('image');            
            $table->string('updated_at');
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
         Schema::dropIfExists('alumni');
    }
}
