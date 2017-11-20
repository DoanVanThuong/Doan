<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\LoaiTin;
use App\Http\Models\TinTuc;


class LoaiTinController extends Controller
{

   public function getDanhSach()
	{
		//biến lưu danh sách lấy loai tin từ model
		$loaitin = LoaiTin::all();
		return view('admin.loaitin.danhsach',['loaitin'=>$loaitin]);
	}
	public function getThem()
	{
		return view('admin.loaitin.them');
	}
	public function postThem( Request $request)
	{
		$this->validate($request , 
			[
				'tenloai' =>'required|unique:news_category,name|min:3|max:100'


		], 
		[
			'tenloai.required' =>'Bạn chưa nhập tên thể loại',
			'tenloai.unique' =>'tên loại tin đã tồn tại',
			'tenloai.min' => 'tên loại tin phải có độ dài từ 3 cho đến 100 ký tự',
			'tenloai.max' => 'tên loại tin phải có độ dài từ 3 cho đến 100 ký tự',

		]);
		$loaitin = new LoaiTin();
		$loaitin->name = $request->tenloai;
		$loaitin->slug =str_slug($request->tenloai);
		$loaitin->save();
		//sau khi thêm xong trở lại trang thêm
		return redirect('admin/loaitin/them')->with('thongbao','thêm thành công');
	}
	public function getSua($id)
	{
		//lấy ra id loại tin muốn sưa
		$loaitin = LoaiTin::find($id);	
		return view('admin.loaitin.sua' ,['loaitin' =>$loaitin]);
	}
	public function postSua(Request $request , $id)
	{
		$loaitin = LoaiTin::find($id);
		$this->validate($request,
			[
				'tenloai' =>'required|unique:news-category,name|min:3|max:100'

		], 
		[
			'tenloai.required' =>'Bạn chưa nhập tên thể loại',
			'tenloai.min' => 'tên loại tin phải có độ dài từ 3 cho đến 100 ký tự',
			'tenloai.max' => 'tên loại tin phải có độ dài từ 3 cho đến 100 ký tự',
			'tenloai.unique' =>'tên loại tin đã tồn tại',

		]);
		$loaitin->name = $request->tenloai;
		$loaitin->slug = str_slug($request->tenloai);
		$loaitin->save();
		//sau khi sửa xong trở lại trang sửa		
		return redirect('admin/loaitin/sua/'.$id.'/')->with('thongbao','sửa thành công');
	}

	public function getXoa($id)
	{
		$loaitin = LoaiTin::find($id);
		$loaitin->delete();
		// $loaitin->save();

		return redirect('/admin/loaitin/danhsach')->with('thongbao','xóa thành công');	
	}
}
?>
