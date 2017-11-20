<?php


namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;

class Sach extends Model
{
   //khi báo tên bảng
    protected  $table = "books";
    public function loaisach()
    {
    	return $this->belongsTo('App\Http\Models\LoaiSach','category_id','id');
    }
}
