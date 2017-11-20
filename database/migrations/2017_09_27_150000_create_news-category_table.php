<?php 




use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


/**
* 
*/
class CreateNewsCategoryTable extends Migration
{
	
	 /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news-category', function (Blueprint $table) {
            $table->increments('news-category-id');
            $table->string('name');
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
        Schema::dropIfExists('news-category');
    }
}
 ?>