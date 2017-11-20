<?php


namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;
use App\User;

class SinhVien extends Model
{
    //khi báo tên bảng
    protected  $table = "students";
    public function user()
    {
    	return $this->hasOne('App\User');
    }

}
