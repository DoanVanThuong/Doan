<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Sach;
use App\Http\Models\LoaiSach;


class SachController extends Controller
{
    public function getDanhSach()
    {
    	$sach = Sach::all();

    	return view('admin.sach.danhsach',['sach' =>$sach]);
    }

    public function getThem()
    {
    	//lấy ra tên các loại sách
    	$loaisach = LoaiSach::all();
    	return view('admin.sach.them',['loaisach'=>$loaisach ]);
    }   
     public function postThem(Request $request)
    {
    	$this->validate($request,[
            'ten' => 'required|min:3',
            'tomtat' =>'required',
            'nxb' => 'required',
            'namxuatban' => 'required',
            'tacgia' => 'required',
            'sotrang' => 'required',
            'lang' => 'required',
            'size' => 'required',




    	],
    	[
            'ten.required' =>'bạn chưa nhập tên sách',
            'ten.min' =>'tên sách ít nhất 3 ký tự',
            'tomtat.required' =>'bạn chưa nhập tóm tắt',
            'nxb.required' =>'bạn chưa nhập nhà xuất bản',
            'tacgia.required' =>'bạn chưa nhập tác giả',
            'sotrang.required' =>'bạn chưa nhập số trang',
            'lang.required' =>'bạn chưa nhập ngôn ngữ',
            'size.required' =>'bạn chưa nhập kích thước',



    	]);
        $sach = new Sach;
        $sach->name = $request->ten;
        $sach->category_id = $request->loaisach;

        $sach->slug = str_slug($request->ten);
        $sach->company = $request->nxb;
        $sach->author = $request->tacgia;
        $sach->year = $request->namxuatban;
        $sach->sumary = $request->tomtat;
        $sach->lang = $request->lang;
        $sach->size = $request->size;
        $sach->page = $request->sotrang;

        //kiem tra upload anh
        if($request->hasFile('anh'))
        {
            $file = $request->file('anh');
            $format =$file->getClientOriginalExtension();
            if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  )
                {
                    return redirect('admin/sach/them')->with('thongbao','file ảnh phải có đuôi jpg,png,jpeg,bmp');
                }
            
            //lay ten hinh
            $tenhinh = $file->getClientOriginalName();
            //lay ten hinh + chuoi ngau nhien
            $hinh = str_random(4)."_".$tenhinh;
            //neu random trung thi chay lai random lai
            while (file_exists("img/books/".$hinh)) {
                 $hinh = str_random(4)."_".$tenhinh;
            }
            //luu hinh
            $file->move('img/books', $hinh);
            $sach->image = 'img/books/'.$hinh;
            // echo $file;

        }
        else
        {
            $sach->image = " ";
        }
        // echo $request->loaisach;
    	$sach->save();
        return redirect('admin/sach/them')->with('thongbao','Thêm sách thành công');
    }
    public function getSua($id)
    {
        //lấy ra id tin tuc sua 
        $sach = Sach::find($id);
        //lấy ra id loai sách
        $loaisach = LoaiSach::all();
        return view('admin.sach.sua' , ['sach' =>$sach , 'loaisach'=>$loaisach]);


    }
    public function postSua(Request $request,$id)
    {
        $this->validate($request,[
            'ten' => 'required|min:3',
            'tomtat' =>'required',
            'nxb' => 'required',
            'namxuatban' => 'required',
            'tacgia' => 'required',
            'sotrang' => 'required',
            'lang' => 'required',
            'size' => 'required',
            'anh' => 'required',

    	],
    	[
            'ten.required' =>'bạn chưa nhập tên sách',
            'ten.min' =>'tên sách ít nhất 3 ký tự',
            'tomtat.required' =>'bạn chưa nhập tóm tắt',
            'nxb.required' =>'bạn chưa nhập nhà xuất bản',
            'tacgia.required' =>'bạn chưa nhập tác giả',
            'sotrang.required' =>'bạn chưa nhập số trang',
            'lang.required' =>'bạn chưa nhập ngôn ngữ',
            'size.required' =>'bạn chưa nhập kích thước',
            'anh.required' =>'bạn chưa chọn ảnh',

    	]);
        $sach = Sach::find($id);
        $sach->name = $request->ten;
        $sach->category_id = $request->loaisach;

        $sach->slug = str_slug($request->ten);
        $sach->company = $request->nxb;
        $sach->author = $request->tacgia;
        $sach->year = $request->namxuatban;
        $sach->sumary = $request->tomtat;
        $sach->lang = $request->lang;
        $sach->size = $request->size;
        $sach->page = $request->sotrang;


        //kiem tra upload anh
        if($request->hasFile('anh'))
        {
            $file = $request->file('anh');
            $format =$file->getClientOriginalExtension();
            if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  )
                {
                    return redirect('admin/sach/sua/'.$id)->with('thongbao','file ảnh phải có đuôi jpg,png,jpeg,bmp');
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
            unlink($sach->image);

            $sach->image = 'img/books/'.$hinh;
            // echo $file;

        }
        else
        {
            //nếu không thay hình thì thôi
        }
        $sach->save();
        return redirect('admin/sach/sua/'.$id)->with('thongbao','sửa thành công');

    }
    public function getXoa($id)
    {
        $sach = Sach::find($id);
        $sach->delete();
        unlink($sach->image);
        return redirect('admin/sach/danhsach')->with('thongbao','xóa thành công');  
    }
    
}
