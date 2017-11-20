<?php 

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;

/**
* 
*/
class TeacherQModel extends Model
{
	
	public static function get_teacher(){
		return DB::table('teachers as t')
		->select('t.*')
		->get();
	}
}

?>