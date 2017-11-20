<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\alumni;

class AlumniController extends Controller
{
    public function getDanhSach()
    {
    	$cuusinhvien = alumni::all();
    	return view('admin.cuusinhvien.danhsach' ,['cuusinhvien' =>$cuusinhvien]);
    }
    public function getThem()
    {
    	return view('admin.cuusinhvien.them');
    }
     public function getSua($id)
    {
    	$cuusinhvien = alumni::find($id);
    	return view('admin.cuusinhvien.sua',['cuusinhvien'=>$cuusinhvien]);
    }
    public function postThem(Request $request)
    {
    	$this->validate($request , 
    		[
    			'ten' =>'required',
    			'linhvuc' =>'required|',
    			'thongtin' =>'required',


    		] 
    		,[
    			'ten.required' =>'Tên không bỏ trống',
    			'linhvuc.required' =>'lĩnh vực không bỏ trống',
    			'thongtin.required' =>'thông tin không bỏ trống',

    		]);
    	$cuusinhvien = new alumni;
    	$cuusinhvien->name = $request->ten;    	
    	$cuusinhvien->business = $request->linhvuc;
    	$cuusinhvien->info = $request->thongtin;
    	//kiem tra upload anh
        if($request->hasFile('anh'))
        {
            $file = $request->file('anh');
            $format =$file->getClientOriginalExtension();
            if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  )
                {
                    return redirect('admin/cuusinhvien/them')->with('thongbao','file ảnh phải có đuôi jpg,png,jpeg,bmp');
                }
            
            //lay ten hinh
            $tenhinh = $file->getClientOriginalName();
            //lay ten hinh + chuoi ngau nhien
            $hinh = str_random(4)."_".$tenhinh;
            //neu random trung thi chay lai random lai
            while (file_exists("img/students/".$hinh)) {
                 $hinh = str_random(4)."_".$tenhinh;
            }
            //luu hinh
            $file->move('img/students', $hinh);
            $cuusinhvien->image = 'img/students/'.$hinh;
            // echo $file;

        }
        else
        {
            $cuusinhvien->image = " ";
        }
        // dd($cuusinhvien);
        $cuusinhvien->save();
    	return redirect("admin/cuusinhvien/them")->with("thongbao","Thêm thành công");
    }
    public function postSua(Request $request, $id)
    {
    	$this->validate($request , 
    		[
    			'ten' =>'required',
    			'linhvuc' =>'required',
    			'thongtin' =>'required',

    		] 
    		,[
    			'ten.required' =>'Tên không bỏ trống',
    			'linhvuc.required' =>'lĩnh vực không bỏ trống',
    			'thongtin.required' =>'thông tin không bỏ trống',

    		]);
    	$cuusinhvien = alumni::find($id);
    	$cuusinhvien->name = $request->ten;    	
    	$cuusinhvien->business = $request->linhvuc;
    	$cuusinhvien->info = $request->thongtin;
    	//kiem tra upload anh
        if($request->hasFile('anh'))
        {
            $file = $request->file('anh');
            $format =$file->getClientOriginalExtension();
            if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  )
                {
                    return redirect('admin/cuusinhvien/sua/'.$id)->with('thongbao','file ảnh phải có đuôi jpg,png,jpeg,bmp');
                }
            
            //lay ten hinh
            $tenhinh = $file->getClientOriginalName();
            //lay ten hinh + chuoi ngau nhien
            $hinh = str_random(4)."_".$tenhinh;
            //neu random trung thi chay lai random lai
            while (file_exists("img/students/".$hinh)) {
                 $hinh = str_random(4)."_".$tenhinh;
            }
            //luu hinh
            $file->move('img/students', $hinh);
            unlink($cuusinhvien->image);
            $cuusinhvien->image = 'img/students/'.$hinh;
            // echo $file;

        }
        else
        {

        }
        // dd($cuusinhvien);
        $cuusinhvien->save();
    	return redirect("admin/cuusinhvien/sua/".$id)->with("thongbao","Sủa thành công");
    }
    public function getXoa($id)
    {
    	$cuusinhvien = alumni::find($id);
        unlink($cuusinhvien->image);

    	$cuusinhvien->delete();
    	return redirect("admin/cuusinhvien/danhsach")->with("thongbao","Xóa thành công");
    }
}
