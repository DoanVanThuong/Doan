<?php


// namespace App\Http\Models;
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use App\Http\Models\SinhVien;



class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //1 user co nhieu comment
    public function comment()
    {
        return $this->hasMany('App\Http\Models\Comment','user_id','id');
    }
    //1 user thuoc 1 sinhvien 
    public function sinhvien(){
        return $this->hasOne('App\Http\Models\SinhVien');
    }
    public static function check_admin($id)
    {
        //kiểm tra có phải user
        $u = Auth::id();
        if($u)
        {
            //neu la user kiem tra co phai admin
            $role = User::find($id);
            $b = $role->role;
            if($b ==1) //la admin
            {
                return true;
            }
            //không phai admin
            return false;
        }
        else
        {   
            //không phai user
            return false;
        }
    }
    public static function check_super_admin($id){
        $user = Auth::id();
        if($user)
        {
            $role = User::find($id);
            $superadmin = $role->role;
            if($superadmin ==1 && $user ==5)
            {
                return true;
            }
            else
                return false;
        }
        else
            
        return false;
    }
    public static function check_user_sinhvien($id)
    {
       
        
        if(Auth::id()== $id)
        {
            return true;
        }
        return false;

    }
}
