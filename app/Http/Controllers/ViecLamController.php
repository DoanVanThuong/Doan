<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\ViecLam;

class ViecLamController extends Controller
{
    public function getDanhSach()
    {
    	$vieclam = ViecLam::all();

    	return view('admin.vieclam.danhsach',['vieclam' =>$vieclam]);
    }
    
	public function getThem()
    {
    	// $giaovien = vieclam::all();
    	return view('admin.vieclam.them');

    }
    public function postThem(Request $request)
    {
    	// $this->validate($request,[
     //        'ten' => 'required|min:3',
     //        'chucdanh' =>'required',
     //        'hocvi' => 'required',
     //        'vitri' => 'required',
     //        'email' => 'required',


    	// ],
    	// [
     //        'ten.required' =>'bạn chưa nhập tên',
     //        'ten.min' =>'tên ít nhất 3 ký tự',
     //        'chucdanh.required' =>'bạn chưa nhập chức danh',
     //        'vitri.required' =>'bạn chưa nhập vị trí',
     //        'email.required' =>'bạn chưa nhập email',

    	// ]);
        $vieclam = new ViecLam;
        $vieclam->name = $request->ten;
        $vieclam->slug = str_slug($request->ten);
        $vieclam->company = $request->congty;
        $vieclam->address = $request->diachi;
        $vieclam->salary = $request->luong;
        $vieclam->tag = $request->tag;
        $vieclam->type = $request->loaicv;
        $vieclam->year = $request->nam;
        $vieclam->startdate = $request->ngaybatdau;
        $vieclam->enddate = $request->ngayketthuc;
        $vieclam->content = $request->noidung;

        //kiem tra upload anh
        if($request->hasFile('anh'))
        {
            $file = $request->file('anh');
            $format =$file->getClientOriginalExtension();
            if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  )
                {
                    return redirect('admin/vieclam/them')->with('thongbao','file ảnh phải có đuôi jpg,png,jpeg,bmp');
                }
            
            //lay ten hinh
            $tenhinh = $file->getClientOriginalName();
            //lay ten hinh + chuoi ngau nhien
            $hinh = str_random(4)."_".$tenhinh;
            //neu random trung thi chay lai random lai
            while (file_exists("img/logo/".$hinh)) {
                 $hinh = str_random(4)."_".$tenhinh;
            }
            //luu hinh
            $file->move('img/logo', $hinh);
            $vieclam->image = 'img/logo/'.$hinh;
            // echo $file;

        }
        else
        {
            $vieclam->image = " ";
        }
        // echo $tenhinh;
    	$vieclam->save();
        return redirect('admin/vieclam/them')->with('thongbao','Thêm tin tuyển dụng thành công');
    }
    public function getSua($id)
    {
        //lấy ra id tin tuc sua 
        $vieclam = ViecLam::find($id);
        return view('admin.vieclam.sua' , ['vieclam' =>$vieclam]);
    }
    public function postSua(Request $request,$id)
    {
        // $this->validate($request,[
        //     'tieude' => 'required|min:10',
        //     'tomtat' =>'required',
        //     'noidung' => 'required',
        // ],
        // [
        //     'tieude.required' =>'bạn chưa nhập tiêu đề',
        //     'tieude.min' =>'tiêu đề ít nhất 10 ký tự',
        //     'tomtat.required' =>'bạn chưa nhập tóm tắt',
        //     'noidung.required' =>'bạn chưa nhập nội dung',
        // ]);
        $vieclam = ViecLam::find($id);
        $vieclam->name = $request->ten;
        $vieclam->slug = str_slug($request->ten);
        $vieclam->company = $request->congty;
        $vieclam->address = $request->diachi;
        $vieclam->salary = $request->luong;
        $vieclam->tag = $request->tag;
        $vieclam->type = $request->loaicv;
        $vieclam->year = $request->nam;
        $vieclam->startdate = $request->ngaybatdau;
        $vieclam->enddate = $request->ngayketthuc;
        $vieclam->content = $request->noidung;


        //kiem tra upload anh
        if($request->hasFile('anh'))
        {
            $file = $request->file('anh');
            $format =$file->getClientOriginalExtension();
            if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  )
                {
                    return redirect('admin/vieclam/sua/'.$id)->with('thongbao','file ảnh phải có đuôi jpg,png,jpeg,bmp');
                }
            
            //lay ten hinh
            $tenhinh = $file->getClientOriginalName();
            //lay ten hinh + chuoi ngau nhien
            $hinh = str_random(4)."_".$tenhinh;
            //neu random trung thi chay lai random lai
            while (file_exists("img/books/".$hinh)) {
                 $hinh = str_random(4)."_".$tenhinh;
            }
            $file->move('img/books', $hinh);
            //xóa file cũ
            unlink($vieclam->image);

            $vieclam->image = 'img/books/'.$hinh;
            // echo $file;

        }
        else
        {
            //nếu không thay hình thì thôi
        }
        $vieclam->save();
        return redirect('admin/vieclam/sua/'.$id)->with('thongbao','sửa thành công');

    }
    public function getXoa($id)
    {
        $vieclam = ViecLam::find($id);
        $vieclam->delete();
        unlink($vieclam->image);

        return redirect('admin/vieclam/danhsach')->with('thongbao','xóa tin tuyển dụng thành công');  
    }
}

