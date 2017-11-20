<?php 


namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Constants;
use Illuminate\Support\Facades\DB;

class BookQModel extends Model
{

    /**
     * get books by id
     * @return object|boolean : all properties from `foods` table,
     * returns false if no food is founded
     */
    
    public static function get_books()
    {
    	return DB::table('books as b')
    		//join voi bang category
			->join('categories as c','b.category_id' , '=' , 'c.id')
			->select('b.image','b.name' ,'c.category_name as cate_name','c.slug')
			->limit(8) //lay ra toi da 8 row
			->get();  
              
    }
    public static function get_book_by_category($slug)
    {
    	return DB::table('books as b')
        	->join('categories as c','b.category_id' , '=' , 'c.id')
        	->select('b.*')
        	->where('c.slug' ,$slug)
        	->get() ;
    }
    public static function get_category_name($id)
    {
        return DB::table('categories as c')->where('c.id',$id) ->first() ;
           
            
           
    }
    //lấy sách theo web
    public static function get_book_by_category_id($id)
    {
        return DB::table('books as b')
            ->join('categories as c','b.category_id' , '=' , 'c.id')
            ->select('b.*')            
            ->where('b.category_id',$id)
            // ->take(8)
            ->get();
       
    }
    public static function get_category()
    {
        return DB::table('categories as c')
        ->select('c.*')
        // ->limit(9)
        ->get();
    }
    //lấy id sách qua slug
    public static function get_idBooks_by_slug($slug)
    {        
        $text = DB::table('books')
        ->where('slug',$slug)
        ->first();
        return $text->id;
    }
    //lấy data cuốn sach qua id
    public static function get_books_by_id($id)
    {
        return DB::table('books')->where('id',$id)->first();
    }

    public static function timkiem($keyword,$num){
        return DB::table('books')
        ->where('name','like','%'.$keyword. '%')
        ->orwhere('author','like','%'.$keyword. '%')
        ->orwhere('company','like','%'.$keyword. '%')
        ->take(10)
        ->paginate($num);
        
    }

}

 ?>