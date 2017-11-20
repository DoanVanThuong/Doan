<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\ThanhTich;

class ThanhTichController extends Controller
{
    public function getDanhSach()
    {
    	$thanhtich = ThanhTich::all();

    	return view("admin.thanhtich.danhsach" , ['thanhtich' =>$thanhtich]);
    }

    public function getThem()
    {
    	return view("admin.thanhtich.them");
    }
    public function getSua($id)
    {
    	$thanhtich = ThanhTich::find($id);
    	return view('admin.thanhtich.sua',['thanhtich' =>$thanhtich]);
    }
    public function postThem(Request $request )
    {
    	$this->validate($request ,
    	 [
    	 	
    	 	'ten' => 'required',
    	 	'cuocthi' => 'required',
    	 	'thanhtich' => 'required',   	 	
    	 ] 
    	 ,[
    	 	'ten.required' =>'Tên không được bỏ trống',
    	 	'cuocthi.required' =>'Tên cuộc thi không được bỏ trống',
    	 	'thanhtich.required' =>'Thành tích không được bỏ trống',
    	 ]  	
    	);
    	 $thanhtich = new ThanhTich;
    	 $thanhtich->name = $request->ten;
    	 $thanhtich->gain = $request->thanhtich;
    	 $thanhtich->competition = $request->cuocthi;
    	 (($request->nam =="") ? $thanhtich->year ="null" : $thanhtich->year = $request->nam);

    	$thanhtich->save();
    	return redirect("admin/thanhtich/them")->with("thongbao","thêm thành công");
    }
    public function postSua(Request $request , $id )
    {
    	$this->validate($request ,
    	 [
    	 	
    	 	'ten' => 'required',
    	 	'cuocthi' => 'required',
    	 	'thanhtich' => 'required',
    	 	
    	 ] 
    	 ,[
    	 	'ten.required' =>'Tên không được bỏ trống',
    	 	'cuocthi.required' =>'Tên cuộc thi không được bỏ trống',
    	 	'thanhtich.required' =>'Thành tích không được bỏ trống',


    	 ]
    	

    	);
    	$thanhtich = ThanhTich::find($id);
    	$thanhtich->id = $id;
    	$thanhtich->name = $request->ten;
    	$thanhtich->gain = $request->thanhtich;
    	$thanhtich->competition = $request->cuocthi;
    	(($request->nam =="") ? $thanhtich->year ="null" : $thanhtich->year = $request->nam);

    	$thanhtich->save();
    	return redirect("admin/thanhtich/sua/".$id)->with("thongbao","Sửa thành công");
    }
    public function getXoa($id)
    {
    	$thanhtich = ThanhTich::find($id);
    	$thanhtich->delete();
    	return redirect("admin/thanhtich/danhsach")->with("thongbao","xóa thành công");
    }

}
