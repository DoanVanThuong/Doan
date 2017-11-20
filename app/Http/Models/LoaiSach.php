<?php


namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;

class LoaiSach extends Model
{
    //khi báo tên bảng
    protected  $table = "categories";

    public function sach()
    {
    	return $this->hasMany('App\Http\Models\Sach','category_id','id');
    }

}
