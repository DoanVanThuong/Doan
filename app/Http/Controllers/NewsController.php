<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//them BookQmodel
use App\Http\Models\BookQModel;
use App\Http\Models\NewsQModel;
use App\Http\Models\JobQModel;
use App\Http\Models\Comment;
use App\Http\Models\TinTuc;
use App\Http\Models\Slide;


use App\User;


/**
* 
*/
class NewsController extends Controller
{
	
	// public function show_list_news(){
	// 	$count = NewsQModel::get_news_by_count()->count();
	// 	$news =NewsQModel::get_news(4);
	// 	$slide_header = Slide::getSlide_by_type(1,4);
	// 	// dd($news);
	// 	return view('pages.news', [
	// 	 'news' =>$news ,'v_news'=>$news,
	// 	 'slide_header' =>$slide_header,
	// 	]);
	// }

	//trang lich thi
	public function show_list_lichthi(){
		$news = NewsQModel::get_news_by_news_category(1,4);
		$relative =NewsQModel::get_news_by_news_category(1,4);
		$slide_header = Slide::getSlide_by_type(1,4);
		return view('pages.lichthi', [ 
			'l_news' =>$news ,'v_news' =>$relative,'news'=>$news,
			'slide_header' =>$slide_header,
		]);
	}
	//trang hoat dong
	public function show_list_hoatdong(){
		$news = NewsQModel::get_news_by_news_category(2,2);
		$relative =NewsQModel::get_news_by_news_category(2,4);
		$slide_header = Slide::getSlide_by_type(1,4);
		
		// dd($relative);
		return view('pages.hoatdongsv', [ 
			'v_news' =>$relative,'news'=>$news,
			'slide_header' =>$slide_header,
		]);
	}
	//trang hoat dong
	public function show_list_khcn(){
		$news = NewsQModel::get_news_by_news_category(5,2);
		$relative =NewsQModel::get_news_by_news_category(5,4);
		$slide_header = Slide::getSlide_by_type(1,4);
		
		// dd($relative);
		return view('pages.khcn', [
		 'v_news' =>$relative,'news'=>$news,
		 'slide_header' =>$slide_header,
		]);
	}
	// public function view_index(){
	// 	//lấy số lương tin trong bảng
	// 	$count = NewsQModel::get_news_by_count()->count();
	// 	$news = NewsQModel::get_news(8);
	// 	$news_news = NewsQModel::get_news_by_news_category(3,1)->first();
	// 	$news_hdsv = NewsQModel::get_news_by_news_category(2,1)->first();
	// 	$news_lichthi = NewsQModel::get_news_by_news_category(1,1)->first();
	// 	$news_daotao = NewsQModel::get_news_by_news_category(4,2);
	// 	$news_job = JobQModel::get_job();
	// 	$news_khcn = NewsQModel::get_news_by_news_category(5,1);
	// 	//lấy slide
	// 	$slide_header = Slide::getSlide_by_type(1,4);
	// 	// dd($slide_header);

	// 	// dd($news_daotao);

	// 	// dd($news_job);
	// 	return view('pages.index', [
	// 		'count'=>$count ,
	// 		'v_news' =>$news ,
	// 		'h_news' =>$news_hdsv ,
	// 		'news_lichthi' =>$news_lichthi ,
	// 		'news_news' =>$news_news ,
	// 		'news_dt'=>$news_daotao ,
	// 		'news_khcn' =>$news_khcn,
	// 		'jobs' =>$news_job,
	// 		'slide_header' =>$slide_header,

			
	// 	]);
		
	// }

	public function view_detail(){
		$relative =NewsQModel::get_news(6);
		$slide_header = Slide::getSlide_by_type(1,4);


		// dd($relative);
		return view('pages.news-detail' , ['r_news' => $relative,'slide_header' =>$slide_header] );
	}
	public function ViewNewsContent($slug){
		//lấy id tu slug trong bang news
		$id = NewsQModel::get_IDNews_With_Slug($slug);
		//từ id lấy data tuong ứng với id news đó
        $data = NewsQModel::get_News_by_ID($id);
        //tu id tin do lay ra category tin tuong ứng
        $cat = NewsQModel::get_category_id($id)[0]->news_category_id;
        //lay ra tin lien quan thuộc category đó
        $relative =NewsQModel::get_news_by_news_category($cat,5);        
        // dd($relative);
        $comment = NewsQModel::getComment_by_id_news($id);
        
		$slide_header = Slide::getSlide_by_type(1,4);
        
        // $comments = NewsQModel::getComment_by_id_news($id)->user_id;

        // $user =User::find(3);

        // dd($user);
        // dd($comment);
        // dd($relative);
        // $allcomment = Comment::all();
       
        // $user = User::find($idUser);
        return view('pages.news-detail', ['data' => $data, 'id' => $id ,'r_news' => $relative , 'comment' =>$comment , 'slide_header' =>$slide_header,]);
	}	

	// public function SearchNews(request $request	)
	// {
		
	// 	$keyword = $request->keyword;
		
	// 	if($keyword == '') {
	// 		$this->validate($request, 
	// 			[
	// 				'keyword' =>'required|max:10',
	// 			] ,
	// 			[
	// 			 	'keyword.required' =>'bạn chưa nhập từ khóa tìm kiếm',
	// 			 	'keyword.max' => 'từ khóa tìm kiếm phải nhỏ hơn 10 ký tự',		 	
	// 			]
	// 		);
	// 	}
	// 	else
	// 	{
	// 		$tintuc =NewsQModel::timkiem($keyword,5);
 //            $tintuc->withPath('timkiem?search='.$keyword);
	// 	}			
 //        return view('pages.search-new', ['tintuc' => $tintuc ,'keyword'=>$keyword]);       
	// }
}
?>
