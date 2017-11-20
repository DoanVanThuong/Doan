<?php 


namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;

/**
* 
*/
class JobQModel extends Model
{
	
	public static function get_job(){
		return DB::table('jobs as j')
		->select('j.*')		
		->get();
	}
	public static function get_id_job_by_slug($slug)
	{
		$text = DB::table('jobs as j')->where('j.slug',$slug)->first();
		return $text->id;
	}
	public static function get_Job_by_ID($id){
		return DB::table('jobs as j')
		->where('id',$id)
		->first();
	}
}



 ?>