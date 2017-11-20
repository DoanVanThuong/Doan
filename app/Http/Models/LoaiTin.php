<?php


namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;

class LoaiTin extends Model
{
    //khi báo tên bảng
    protected  $table = "news_category";

    //khai báo relationship
    //1 loai tin co nhieu tin 
    public function tintuc()
    {
    	return $this->hasMany('App\Http\Models\TinTuc','news_category_id' ,'id');
    }

}
