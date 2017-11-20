<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Slide;
use App\Http\Models\JobQModel;
use App\Http\Models\TeacherQModel;
use App\Http\Models\GiangVien;
use App\Http\Models\ThanhTich;
use App\Http\Models\alumni;
use App\Http\Models\BookQModel;
use App\Http\Models\NewsQModel;
use App\Http\Models\UsersCModel;
use Illuminate\Support\Facades\Auth;
use App\Http\Models\SinhVien;
use Illuminate\Support\Facades\Hash;
use App\User;





class PageController extends Controller
{
     function __construct()
    {
    	//slide chung
		$slide_header = Slide::getSlide_by_type(1,4);

    	view()->share('slide_header' ,$slide_header);
    	// dd($slide_header);
    	// dd($slide_header);
    }
     function TrangGioiThieu()
    {
    	return view('pages.about');
    }
    function TrangLienHe()
    {
    	$news_job = JobQModel::get_job();
		$slide_banner = Slide::getSlide_by_type(2,4);


    	//logo các cong ty
		return view('pages.contact',['jobs'=>$news_job,'slide_banner'=>$slide_banner]);
    }
    function TrangDaoTao()
    {
    	$teacher = TeacherQModel::get_teacher();
        $thanhtich = ThanhTich::orderBy('year','DESC')->get();
        $cuusinhvien = alumni::all();
        // $slide_header = Slide::getSlide_by_type(1,4);

		// dd($teacher);
		return view('pages.study' , ['v_teacher' => $teacher ,'thanhtich' =>$thanhtich , 'cuusinhvien' =>$cuusinhvien]);
    }
    function TrangTuyenDung()
    {
    	$job = JobQModel::get_job();
		$slide_company = Slide::getSlide_by_type(4,6);
		return view('pages.jobs', [ 
			'v_job' => $job,
			'slide_company'=>$slide_company,
		]);
    }
    function TrangSach()
    {
    	//gọi tới model book
		$books = BookQModel::get_books();
		$book_web = BookQModel::get_book_by_category_id(7);
		$book_phone = BookQModel::get_book_by_category_id(8);
		$book_english = BookQModel::get_book_by_category_id(9);
		$book_app = BookQModel::get_book_by_category_id(3);
		$book_lang = BookQModel::get_book_by_category_id(1);
		$cate = BookQModel::get_category();

		return view('pages.books',[
			'books' =>$books, 
			'v_book_web' => $book_web,
			'p_book_phone' => $book_phone,
			'e_book_english' =>$book_english, 
			'a_book_app' =>$book_app,
			'l_book_lang' =>$book_lang,
			'cate'=>$cate,
		]);			
    }
    function TrangTinTuc()
    {
    	$count = NewsQModel::get_news_by_count()->count();
		$news =NewsQModel::get_news(4);
		// dd($news);
		return view('pages.news', [
		 'news' =>$news ,'v_news'=>$news,
		]);

    }
    function TrangChu()
    {
    	//lấy số lương tin trong bảng
		$count = NewsQModel::get_news_by_count()->count();
		$news = NewsQModel::get_news(8);
		$news_news = NewsQModel::get_news_by_news_category(3,1)->first();
		$news_hdsv = NewsQModel::get_news_by_news_category(2,1)->first();
		$news_lichthi = NewsQModel::get_news_by_news_category(1,1)->first();
		$news_daotao = NewsQModel::get_news_by_news_category(4,2);
		$news_job = JobQModel::get_job();
		$news_khcn = NewsQModel::get_news_by_news_category(5,1);
		//lấy slide banner
		$slide_banner = Slide::getSlide_by_type(2,4);
		//lấy logo cac khoa
		$slide_faculty = Slide::getSlide_by_type(3,6);

		// dd($slide_banner);
		// dd($slide_header);

		// dd($news_daotao);

		// dd($news_job);
		return view('pages.index', [
			'count'=>$count ,
			'v_news' =>$news ,
			'h_news' =>$news_hdsv ,
			'news_lichthi' =>$news_lichthi ,
			'news_news' =>$news_news ,
			'news_dt'=>$news_daotao ,
			'news_khcn' =>$news_khcn,
			'jobs' =>$news_job,
			'slide_banner' =>$slide_banner,
			'slide_faculty' =>$slide_faculty,

			
		]);
    }
    function TrangSinhVien()
    {
    	//lấy id của user danh nhap hien tai
		$id = Auth::id();
		//lay thong tin ve user
		$student = UsersCModel::get_sinhvien_by_id_user($id);		

		return view('pages.student' , ['student' =>$student]);
    }
    function TrangTimKiem(Request $request)
    {

		$keyword = $request->keyword;
		
		if($keyword == '') {
			$this->validate($request, 
				[
					'keyword' =>'required|max:10',
				] ,
				[
				 	'keyword.required' =>'bạn chưa nhập từ khóa tìm kiếm',
				 	'keyword.max' => 'từ khóa tìm kiếm phải nhỏ hơn 10 ký tự',		 	
				]
			);
		}
		else
		{
			$tintuc =NewsQModel::timkiem($keyword,5);
            $tintuc->withPath('timkiem?search='.$keyword);
		}			
        return view('pages.search-new', ['tintuc' => $tintuc ,'keyword'=>$keyword]); 
    }
    

}
