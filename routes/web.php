<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// trang chủ
Route::get('/','PageController@TrangChu');

// trang chủ

Route::get('/index','PageController@TrangChu');
 
// trang giới thiệu
Route::get('/gioi-thieu','PageController@TrangGioiThieu');
//trang  đào tạo
//
// Route::get('/dao-tao' ,'TeacherController@show_teacher');
Route::get('/dao-tao' ,'PageController@TrangDaoTao');
//trang liên hệ
Route::group(['prefix' =>'lien-he'] , function(){
	// Route::get('/','ContactController@view_contact');
	Route::get('/','PageController@TrangLienHe');
	Route::post('/gui' ,'ContactController@postThem' );
});

//trang tin tức lich thi
Route::get('/lich-thi','NewsController@show_list_lichthi');
//trang tin tức hoạt động sinh viên
Route::get('/hoat-dong','NewsController@show_list_hoatdong');
//trang tin tức khoa hoc cong nghe
Route::get('/khoa-hoc-cong-nghe','NewsController@show_list_khcn');


//trang tìm kiếm tin tuc
Route::get('/timkiem','PageController@TrangTimKiem');

//them comment bang ajax
Route::any('/comment/{id}','CommentController@ajaxComment');

//trang tin tuc tong hop
Route::group(['prefix' =>'tin-tuc'] ,function(){
	Route::get('/','PageController@TrangTinTuc');
	//trang chi tiết tin
	Route::get('/{slug}','NewsController@ViewNewsContent');
});

//trang tuyen dung 
Route::group(['prefix' =>'tuyen-dung'] , function(){
	Route::get('/','PageController@TrangTuyenDung');
	//trang chi tiet tin tuyen dung
	Route::get('/{slug}','JobController@viewContentJob');
});

Route::group(['prefix' =>'sinh-vien' ,'middleware' =>['sinhvien'],['auth']] ,function(){
	//show thong tin sinh vien qua id
	Route::get('/{id}' ,'PageController@TrangSinhVien');
	
});
Route::post('sinh-vien/sua/{get}' ,'UserController@post_update');

// trang tai lieu hoc tap
Route::group(['prefix'=>'sach'] , function(){
		Route::get('/','PageController@TrangSach');
		//trang chi tiết sach theo loai
		Route::get('/{slug}','BookController@show_list_book_by_category');
		//chi tiet sach theo ten
		Route::get('/chi-tiet/{slug}','BookController@ViewBooksContent');
		//trang tìm kiếm sách
		Route::get('/tim-kiem','BookController@SearchBooks');
		
		
});

//URL user guest đăng nhập
Route::get('/sinh-vien','UserController@get_Danhnhap');
Route::get('/dang-nhap','UserController@get_Danhnhap');
Route::post('/dang-nhap','UserController@post_Danhnhap');
Route::get('/dang-xuat','UserController@logout');
//mã hóa pass word moi lan them user moi tren phpmyadmin
Route::get('/password/{id}/{pass}',"UserController@update_users_password");

//URL dang nhap admin
Route::get('/admin','UserController@getDangNhap');
Route::post('/admin','UserController@postDangNhap');
Route::get('/superadmin','UserController@getDangNhap');
Route::post('/superadmin','UserController@postDangNhap_super_admin');
Route::get('/admin/dang-xuat','UserController@getDangXuat');

//nhóm route admin
Route::group(['prefix' =>'admin' ,'middleware' => ['admin'] ,['auth'] ] ,function(){
	Route::group(['prefix'=>'loaitin'] , function(){
		Route::get('/danhsach','LoaiTinController@getDanhSach');
		Route::get('/them','LoaiTinController@getThem');
		Route::post('/them','LoaiTinController@postThem');
		Route::get('/sua/{id}','LoaiTinController@getSua');
		Route::post('/sua/{id}','LoaiTinController@postSua');		
		Route::get('/xoa/{id}','LoaiTinController@getXoa');
	});
	Route::group(['prefix'=>'sach'] , function(){
		Route::get('/danhsach','SachController@getDanhSach');
		Route::get('/sua/{id}','SachController@getSua');
		Route::post('/sua/{id}','SachController@postSua');
		Route::get('/them','SachController@getThem');
		Route::post('/them','SachController@postThem');
		Route::get('/xoa/{id}','SachController@getXoa');
	});
	Route::group(['prefix'=>'vieclam'] , function(){
		Route::get('/danhsach','ViecLamController@getDanhSach');
		Route::get('/sua/{id}','ViecLamController@getSua');
		Route::post('/sua/{id}','ViecLamController@postSua');
		Route::get('/them','ViecLamController@getThem');
		Route::post('/them','ViecLamController@postThem');
		Route::get('/xoa/{id}','ViecLamController@getXoa');
	});
	Route::group(['prefix'=>'user' ,'middleware' => ['superadmin'],['auth'] ] , function(){
		Route::get('/danhsach','UserController@getDanhSach');
		Route::get('/sua/{id}','UserController@getSua');
		Route::post('/sua/{id}','UserController@postSua');
		Route::get('/them','UserController@getThem');
		Route::post('/them','UserController@postThem');
		Route::get('/xoa/{id}','UserController@getXoa');
	});
	Route::group(['prefix'=>'sinhvien'] , function(){
		Route::get('/danhsach','SinhVienController@getDanhSach');
		Route::get('/sua/{id}','SinhVienController@getSua');
		Route::post('/sua/{id}','SinhVienController@postSua');
		Route::get('/them','SinhVienController@getThem');
		Route::post('/them','SinhVienController@postThem');
		Route::get('/xoa/{id}','SinhVienController@getXoa');
	});
	Route::group(['prefix'=>'thanhtich'] , function(){
		Route::get('/danhsach','ThanhTichController@getDanhSach');
		Route::get('/sua/{id}','ThanhTichController@getSua');
		Route::post('/sua/{id}','ThanhTichController@postSua');
		Route::get('/them','ThanhTichController@getThem');
		Route::post('/them','ThanhTichController@postThem');
		Route::get('/xoa/{id}','ThanhTichController@getXoa');
	});
	Route::group(['prefix'=>'tintuc'] , function(){
		Route::get('/danhsach','TinTucController@getDanhSach');
		Route::get('/them','TinTucController@getThem');
		Route::post('/them','TinTucController@postThem');
		Route::get('/sua/{id}','TinTucController@getSua');
		Route::post('/sua/{id}','TinTucController@postSua');		
		Route::get('/xoa/{id}','TinTucController@getXoa');
	});
	Route::group(['prefix'=>'giangvien'] , function(){
		Route::get('/danhsach','TeacherController@getDanhSach');
		Route::get('/sua/{id}','TeacherController@getSua');
		Route::post('/sua/{id}','TeacherController@postSua');
		Route::get('/them','TeacherController@getThem');
		Route::post('/them','TeacherController@postThem');
		Route::get('/xoa/{id}','TeacherController@getXoa');
	});
	Route::group(['prefix'=>'cuusinhvien'] , function(){
		Route::get('/danhsach','AlumniController@getDanhSach');
		Route::get('/sua/{id}','AlumniController@getSua');
		Route::post('/sua/{id}','AlumniController@postSua');
		Route::get('/them','AlumniController@getThem');
		Route::post('/them','AlumniController@postThem');
		Route::get('/xoa/{id}','AlumniController@getXoa');
	});
	Route::group(['prefix'=>'slide'] , function(){
		Route::get('/danhsach','SlideController@getDanhSach');
		Route::get('/sua/{id}','SlideController@getSua');
		Route::post('/sua/{id}','SlideController@postSua');
		Route::get('/them','SlideController@getThem');
		Route::post('/them','SlideController@postThem');
		Route::get('/xoa/{id}','SlideController@getXoa');
	});
	Route::group(['prefix'=>'lienhe'] , function(){
		Route::get('/danhsach','ContactController@getDanhSach');
		Route::get('/xoa/{id}','ContactController@getXoa');	
	});
	Route::group(['prefix'=>'comment'] , function(){		
		Route::get('/xoa/{id}','CommentController@getXoa');
	});
});






