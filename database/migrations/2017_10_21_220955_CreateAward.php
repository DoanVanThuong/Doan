<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAward extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('award', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->string('competition');
            $table->string('gain');
            $table->string('year');
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
        Schema::dropIfExists('award');
    }
}
