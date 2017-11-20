<?php 


namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;

class BookCategoryQModel extends Model
{


	public static function get_category()
	{
		return DB::table('categories as c')
		// ->join('books as b','b.category_id' ,'=', 'c.category_id')
		->select('c.category_name')
		// ->where('c.slug' , $cat)
		->get();
	}
}

?>