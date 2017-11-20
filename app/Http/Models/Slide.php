<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;

class Slide extends Model
{
    protected $table = "slide";
     public static function getSlide_by_type($id , $num)
    {
    	return DB::table('slide as s')
			->select('s.*')
			->where('s.type', $id)
			->limit($num)
			->get();
    }
}
