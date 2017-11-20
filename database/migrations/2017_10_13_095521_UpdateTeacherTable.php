<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->string('updated_at')->default(0);
            $table->string('created_at')->default(0);

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropColumn('updated_at');
            $table->dropColumn('created_at');

        });
    }
}
