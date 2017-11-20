<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//them BookQmodel
use App\Http\Models\TeacherQModel;
use App\Http\Models\GiangVien;
use App\Http\Models\ThanhTich;

use App\Http\Models\alumni;
use App\Http\Models\slide;





/**
* 
*/
class TeacherController extends Controller
{
	
	// public function show_teacher()
	// {
	// 	$teacher = TeacherQModel::get_teacher();
 //        $thanhtich = ThanhTich::orderBy('year','DESC')->get();
 //        $cuusinhvien = alumni::all();
 //        $slide_header = Slide::getSlide_by_type(1,4);

	// 	// dd($teacher);
	// 	return view('pages.study' , ['v_teacher' => $teacher ,'thanhtich' =>$thanhtich , 'cuusinhvien' =>$cuusinhvien ,'slide_header' =>$slide_header,]);
	// }
    
	public function getDanhSach()
	{
		$teacher = GiangVien::all();

		return view('admin.giaovien.danhsach' , ['teacher' => $teacher]);
	}
	public function getThem()
    {
    	// $giaovien = GiangVien::all();
    	return view('admin.giaovien.them');

    }
     public function postThem(Request $request)
    {
    	$this->validate($request,[
            'ten' => 'required|min:3',
            'chucdanh' =>'required',
            'hocvi' => 'required',
            'vitri' => 'required',
            'email' => 'required',


    	],
    	[
            'ten.required' =>'bạn chưa nhập tên',
            'ten.min' =>'tên ít nhất 3 ký tự',
            'chucdanh.required' =>'bạn chưa nhập chức danh',
            'vitri.required' =>'bạn chưa nhập vị trí',
            'email.required' =>'bạn chưa nhập email',

    	]);
        $giangvien = new GiangVien;
        $giangvien->name = $request->ten;
        $giangvien->alias = $request->chucdanh;
        $giangvien->degree = $request->hocvi;
        $giangvien->subject = $request->vitri;
        $giangvien->email = $request->email;



        //kiem tra upload anh
        if($request->hasFile('anh'))
        {
            $file = $request->file('anh');
            $format =$file->getClientOriginalExtension();
            if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  )
                {
                    return redirect('admin/giangvien/them')->with('thongbao','file ảnh phải có đuôi jpg,png,jpeg,bmp');
                }
            
            //lay ten hinh
            $tenhinh = $file->getClientOriginalName();
            //lay ten hinh + chuoi ngau nhien
            $hinh = str_random(4)."_".$tenhinh;
            //neu random trung thi chay lai random lai
            while (file_exists("img/teacher/".$hinh)) {
                 $hinh = str_random(4)."_".$tenhinh;
            }
            //luu hinh
            $file->move('img/teacher', $hinh);
            $giangvien->image = 'img/teacher/'.$hinh;
            // echo $file;

        }
        else
        {
            $tintuc->image = " ";
        }
        // echo $tenhinh;
    	$giangvien->save();
        return redirect('admin/giangvien/them')->with('thongbao','Thêm giảng viên thành công');
    }
    public function getSua($id)
    {
        //lấy ra id tin tuc sua 
        $giangvien = GiangVien::find($id);
        return view('admin.giaovien.sua' , ['giangvien' =>$giangvien]);


    }
    public function postSua(Request $request,$id)
    {
        $this->validate($request,[
            'tieude' => 'required|min:10',
            'tomtat' =>'required',
            'noidung' => 'required',
        ],
        [
            'tieude.required' =>'bạn chưa nhập tiêu đề',
            'tieude.min' =>'tiêu đề ít nhất 10 ký tự',
            'tomtat.required' =>'bạn chưa nhập tóm tắt',
            'noidung.required' =>'bạn chưa nhập nội dung',
        ]);
        $giangvien = GiangVien::find($id);
        $giangvien->name = $request->ten;
        $giangvien->alias = $request->chucdanh;
        $giangvien->degree = $request->hocvi;
        $giangvien->subject = $request->vitri;
        $giangvien->email = $request->email;


        //kiem tra upload anh
        if($request->hasFile('anh'))
        {
            $file = $request->file('anh');
            $format =$file->getClientOriginalExtension();
            if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  )
                {
                    return redirect('admin/giangvien/sua/'.$id)->with('thongbao','file ảnh phải có đuôi jpg,png,jpeg,bmp');
                }
            
            //lay ten hinh
            $tenhinh = $file->getClientOriginalName();
            //lay ten hinh + chuoi ngau nhien
            $hinh = str_random(4)."_".$tenhinh;
            //neu random trung thi chay lai random lai
            while (file_exists("img/teacher/".$hinh)) {
                 $hinh = str_random(4)."_".$tenhinh;
            }
            $file->move('img/teacher', $hinh);
            //xóa file cũ
            unlink($giangvien->image);

            $giangvien->image = 'img/teacher/'.$hinh;
            // echo $file;

        }
        else
        {
            //nếu không thay hình thì thôi
        }
        $giangvien->save();
        return redirect('admin/giangvien/sua/'.$id)->with('thongbao','sửa thành công');

    }
    public function getXoa($id)
    {
        $giangvien = GiangVien::find($id);
        $giangvien->delete();
        unlink($giangvien->image);

        return redirect('admin/giangvien/danhsach')->with('thongbao','xóa thành công');  
    }
	
}

 ?>