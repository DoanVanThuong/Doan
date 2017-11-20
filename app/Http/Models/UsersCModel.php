<?php 

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;
use app\User;


/**
* 
*/
class UsersCModel extends Model
{
	
	 public static function update_users($id, $data)
	{
        return DB::table('users')
                ->where('id', '=', $id)
                ->update($data);
    }
    public static function update_password($id,$password)
    {
    	return DB::table('users as u')
    	->where('u.id' , $id)
    	->update(['password' =>$password]);
    }
    public static function get_sinhvien_by_id_user($id)
    {
    	return DB::table('students as s')
    	->where('s.user_id' , $id)
    	->first();
    }
    // public static fuction get_user_by_id()
    // {

    // }
    
}


?>