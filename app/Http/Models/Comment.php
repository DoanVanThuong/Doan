<?php


namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;

class Comment extends Model
{
	//khi báo tên bảng
    protected  $table = "comments";
    //khai bao relationship
    //1 comment thuoc 1 tin tuc
    public function tintuc()
    {
    	return $this->belongsTo('App\Http\Models\TinTuc','news_id','id');
    }
    //1 comment thuoc 1 user
    
    public function user()
    {
    	return $this->belongsTo('App\Http\Models\User','user_id','id');
    }
    

}
