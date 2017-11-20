<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;

class TinTuc extends Model
{
    //khi báo tên bảng
    protected  $table = "news";
    //khai báo relationship bang,khoangoai,khoaching
    //1 tin thuộc 1 loại tin
    public function loaitin()
    {
    	return $this->belongsTo('App\Http\Models\LoaiTin','news_category_id','id');
    }
    //1 tin co nhiều comment
    public function comment()
    {
    	return $this->hasMany('App\Http\Models\Comment','news_id','id');
    }
}
