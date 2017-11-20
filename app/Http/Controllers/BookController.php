<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//them BookQmodel
use App\Http\Models\BookQModel;
use App\Http\Models\Slide;

// use App\Http\Models\BookCategoryQModel;


class BookController extends Controller
{
	// public function show_list_book()
	// {
	// 	//gọi tới model book
	// 	$books = BookQModel::get_books();
	// 	$book_web = BookQModel::get_book_by_category_id(7);
	// 	$book_phone = BookQModel::get_book_by_category_id(8);
	// 	$book_english = BookQModel::get_book_by_category_id(9);
	// 	$book_app = BookQModel::get_book_by_category_id(3);
	// 	$book_lang = BookQModel::get_book_by_category_id(1);
	// 	$cate = BookQModel::get_category();
	// 	$slide_header = Slide::getSlide_by_type(1,4);

	// 	return view('pages.books',[
	// 		'books' =>$books, 
	// 		'v_book_web' => $book_web,
	// 		'p_book_phone' => $book_phone,
	// 		'e_book_english' =>$book_english, 
	// 		'a_book_app' =>$book_app,
	// 		'l_book_lang' =>$book_lang,
	// 		'cate'=>$cate,
	// 		'slide_header' =>$slide_header,


	// 	]);			
	// }
	// public function show_category_name($id)
	// {
	// 	$name = BookQModel::get_books_by_id($id);
	// 	dd($name);
	// 	return view('templates.books-language' ,['name'=>$name]);
	// }
	public function show_list_book_by_category($slug)
	{
		$id = BookQModel::get_book_by_category($slug)[0]->category_id;
		// $data = BookQModel::get_books_by_id($id);
		$book_cate = BookQModel::get_book_by_category_id($id);
		$slide_header = Slide::getSlide_by_type(1,4);

		// 
		// dd($id);
		return view('pages.books-category',['books' => $book_cate,'slide_header' =>$slide_header, ]);

	}
	public function ViewBooksContent($slug){
		//lấy id từ slug trong bang books
		$id = BookQModel::get_idBooks_by_slug($slug);
		//từ id lấy data tương ứng với id
		$data = BookQModel::get_books_by_id($id);
		//từ id lấy catogory_id
		$cat = BookQModel::get_book_by_category_id($data->category_id);
		$name = BookQModel::get_category_name($data->category_id)->category_name;
		$cate = BookQModel::get_category_name($data->category_id);
		$slide_header = Slide::getSlide_by_type(1,4);
		
		// dd($data);
		// dd($data);
		// dd($cate);
		return view('pages.books-detail' ,['id' =>$id , 'data'=>$data ,'cat'=>$cat ,'name'=>$name,'cate'=>$cate,'slide_header' =>$slide_header,]);
	}
	// public function SearchBooks(){
		
	// 	// $keyword = $request->keyword;
	// 	echo $keyword;
	// 	// // dd($keyword);
	// 	// if($keyword == '') {
	// 	// 	$this->validate($request, 
	// 	// 		[
	// 	// 			'keyword' =>'required|max:10',
	// 	// 		] ,
	// 	// 		[
	// 	// 		 	'keyword.required' =>'bạn chưa nhập từ khóa sách tìm kiếm',
	// 	// 		 	'keyword.max' => 'từ khóa sách tìm kiếm phải nhỏ hơn 10 ký tự',		 	
	// 	// 		]
	// 	// 	);
	// 	// }
	// 	// else
	// 	// {
	// 	// 	$sach =BookQModel::timkiem($keyword,5);
 //  //           // $sach->withPath('sach?search='.$keyword);
	// 	// }			
 //  //       return view('pages.search-book', ['sach' => $sach ,'keyword'=>$keyword]);       
 //  	echo "sda";
	// }

}
