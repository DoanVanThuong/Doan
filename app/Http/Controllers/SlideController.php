<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Slide;

class SlideController extends Controller
{
	
    public function getDanhSach()
    {
    	$slide = Slide::all();
    	return view('admin.slide.danhsach',['slide' =>$slide]);
    }
    
    public function getXoa($id)
    {
    	$slide = Slide::find($id);
        //xóa file cũ
            unlink($slide->image);
    	$slide->delete();
    	return redirect("admin/slide/danhsach")->with('thongbao' , "Xóa thành công");
    }
    
    public function getThem()
    {
    	return view('admin.slide.them');
    }
    public function getSua($id)
    {
    	$slide = Slide::find($id);
    	return view('admin.slide.sua' , ['slide' =>$slide]);
    }
    public function postThem(Request $request)
    {

    	$this->validate($request , 
            [
                'anh' => "required",
                'loaislide' =>'required|min:1'
        ] , 
        [
            'anh.required' => ' không được bỏ ảnh trống',
            'loaislide.required' =>'Chọn loại slide',
            'loaislide.min' =>'Chọn loại slide',

        ]);
    	$slide = new Slide;
        if($request->text ==" ")
        {
            $slide->text = "null";

        }
        else
        {
             $slide->text = $request->text;
        }
        if($request->loaislide ==0)
        {
            return redirect('admin/slide/them')->with('thongbao','Vui lòng chọn loại slide');
        }
        else
    	$slide->type = $request->loaislide ;
    	// dd($slide->type);	
    	if($request->hasFile('anh'))
        {
            $file = $request->file('anh');
            $format =$file->getClientOriginalExtension();
            if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  )
                {
                    return redirect('admin/slide/them')->with('thongbao','file ảnh phải có đuôi jpg,png,jpeg,bmp');
                }
            
            //lay ten hinh
            $tenhinh = $file->getClientOriginalName();
            //lay ten hinh + chuoi ngau nhien
            $hinh = str_random(4)."_".$tenhinh;
            //neu random trung thi chay lai random lai
            while (file_exists("img/slider/".$hinh)) {
                 $hinh = str_random(4)."_".$tenhinh;
            }
            //luu hinh
            $file->move('img/slider', $hinh);
            $slide->image = 'img/slider/'.$hinh;
            // echo $file;

        }
        else
        {
            $slide->image = " ";
        }
        // dd($slide);
        $slide->save();
    	return redirect("admin/slide/them")->with("thongbao","Thêm thành công");
    }
    public function postSua(Request $request , $id )
    {
        $this->validate($request , 
            [
                'loaislide' =>'required'
        ] , 
        [
            'loaislide.required' =>'Chọn loại slide',
        ]);

        $slide = Slide::find($id);    
        if($request->text =="")
        {
            $slide->text = "null";

        }
        else
        {
             $slide->text = $request->text;
        }    
        $slide->type = $request->loaislide ;
        // dd($slide->type);    
        if($request->hasFile('anh'))
        {
            $file = $request->file('anh');
            $format =$file->getClientOriginalExtension();
            if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  )
                {
                    return redirect('admin/slide/sua/'.$id)->with('thongbao','file ảnh phải có đuôi jpg,png,jpeg,bmp');
                }
            
            //lay ten hinh
            $tenhinh = $file->getClientOriginalName();
            //lay ten hinh + chuoi ngau nhien
            $hinh = str_random(4)."_".$tenhinh;
            //neu random trung thi chay lai random lai
            while (file_exists("img/slider/".$hinh)) {
                 $hinh = str_random(4)."_".$tenhinh;
            }
            //luu hinh
            $file->move('img/slider', $hinh);
            //xóa file cũ
            unlink($slide->image);
            $slide->image = 'img/slider/'.$hinh;
            // echo $file;

        }
        else
        {

        }
        // dd($slide);
        $slide->save();
        return redirect("admin/slide/sua/".$id)->with("thongbao","Sửa thành công");
    }
}
