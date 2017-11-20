<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Models\UsersCModel;
use App\Http\Models\SinhVien;
use Illuminate\Support\Facades\Hash;
use App\User;


class SinhVienController extends Controller
{
    public function getDanhSach()
    {
    	$sinhvien  = SinhVien::all();
    	// $user = User::find(1)->sinhvien->name;
    	// $u = $sinhvien->sinhvien->name;
    	// dd($sinhvien);
    	return view('admin.sinhvien.danhsach' ,['sinhvien' =>$sinhvien]);
    }
    public function getThem()
    {
    	$user = User::all();
    	// dd($user);
    	return view('admin.sinhvien.them' ,['user' =>$user]);
    }
    public function postThem(Request $request)
    {
    	$this->validate($request,[
            'ten' => 'required|min:3',
            'ngaysinh' =>'required',
            'nam' => 'required',
            'nganh' => 'required',
            'loaidaotao' => 'required',
            'sdt' => 'required',
           




    	],
    	[
            'ten.required' =>'bạn chưa nhập tên sách',
            'ten.min' =>'tên sách ít nhất 3 ký tự',
            'ngaysinh.required' =>'bạn chưa nhập ngày sinh',
            'nam.required' =>'bạn chưa nhập Khóa',
            'nganh.required' =>'bạn chưa nhập Ngành',
            'loaidaotao.required' =>'bạn chưa nhập Loại đào tạo',
            'sdt.required' =>'bạn chưa nhập Số điện thoại',



    	]);
        $sinhvien = new SinhVien;
        $sinhvien->name = $request->ten;
        $sinhvien->user_id = $request->user_id;
        if($request->user_id == 0)
        {
        	$sinhvien->user_id = null;
        }
        else
        {
        	$sinhvien->user_id = $request->user_id;
        }
        $sinhvien->sex = $request->gioitinh;
        if($request->gioitinh == 0)
        {
            $sinhvien->sex = "Nam";
        }
        else
        {
            $sinhvien->sex = "Nữ";
        }
        $sinhvien->id = $request->mssv;
        $sinhvien->birth = $request->ngaysinh;
        $sinhvien->class = $request->lop;
        $sinhvien->year = $request->nam;
        $sinhvien->study = $request->nganh;
        $sinhvien->type = $request->loaidaotao;
        $sinhvien->phone = $request->sdt;
        $sinhvien->email = $request->email;

        //kiem tra upload anh
        if($request->hasFile('anh'))
        {
            $file = $request->file('anh');
            $format =$file->getClientOriginalExtension();
            if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  )
                {
                    return redirect('admin/sinhvien/them')->with('thongbao','file ảnh phải có đuôi jpg,png,jpeg,bmp');
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
            $sinhvien->image = 'img/students/'.$hinh;
            // echo $file;
        }
        else
        {
            $sinhvien->image = " ";
        }
        // echo $request->loaisinhvien;
    	$sinhvien->save();
        return redirect('admin/sinhvien/them')->with('thongbao','Thêm sinh viên thành công');
    }
    public function getXoa($id)
    {
    	$sinhvien = SinhVien::find($id);
    	$sinhvien->delete();
    	return redirect('admin/sinhvien/danhsach')->with('thongbao','Xóa Sinh viên thành công');
    }
    public function getSua($id)
    {
        $sinhvien = SinhVien::find($id);
        // dd($sinhvien);
        return view('admin.sinhvien.sua' , ['sinhvien' =>$sinhvien]);
    }
    public function postSua(Request $request, $id)
    {
        $this->validate($request,[
            'ten' => 'required|min:3',
            'ngaysinh' =>'required',
            'nam' => 'required',
            'nganh' => 'required',
            'loaidaotao' => 'required',
            'sdt' => 'required',
            'email' => 'required',
           




        ],
        [
            'ten.required' =>'bạn chưa nhập tên sách',
            'ten.min' =>'tên sách ít nhất 3 ký tự',
            'ngaysinh.required' =>'bạn chưa nhập ngày sinh',
            'nam.required' =>'bạn chưa nhập Khóa',
            'nganh.required' =>'bạn chưa nhập Ngành',
            'loaidaotao.required' =>'bạn chưa nhập Loại đào tạo',
            'sdt.required' =>'bạn chưa nhập sdt/nếu không rõ ghi là: null',
            'email.required' =>'bạn chưa nhập email/nếu không rõ ghi là:null',




        ]);
        $sinhvien = SinhVien::find($id);
        $sinhvien->name = $request->ten;
        $sinhvien->user_id = $request->user_id;
        if($request->user_id == 0)
        {
            $sinhvien->user_id = null;
        }
        else
        {
            $sinhvien->user_id = $request->user_id;
        }
        $sinhvien->sex = $request->gioitinh;
        if($request->gioitinh == 0)
        {
            $sinhvien->sex = "Nam";
        }
        else
        {
            $sinhvien->sex = "Nữ";
        }
        // $sinhvien->id = $request->mssv;
        $sinhvien->birth = $request->ngaysinh;
        $sinhvien->class = $request->lop;
        $sinhvien->year = $request->nam;
        $sinhvien->study = $request->nganh;
        $sinhvien->type = $request->loaidaotao;
        $sinhvien->phone = $request->sdt;
        if($request->sdt ==null)
        {
            $sinhvien->phone = null;

        }
        else
        {
           $sinhvien->phone = $request->sdt;  
        }
        $sinhvien->email = $request->email;
        if($request->email ==null)
        {
            $sinhvien->email = null;

        }
        else{
            $sinhvien->email = $request->email;
        } 

        //kiem tra upload anh
        if($request->hasFile('anh'))
        {
            $file = $request->file('anh');
            $format =$file->getClientOriginalExtension();
            if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  )
                {
                    return redirect('admin/sinhvien/sua/'.$id)->with('thongbao','file ảnh phải có đuôi jpg,png,jpeg,bmp');
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
            $sinhvien->image = 'img/students/'.$hinh;
            // echo $file;
        }
        else
        {
            // $sinhvien->image = " ";
        }
        // echo $request->loaisinhvien;
        $sinhvien->save();
        return redirect('admin/sinhvien/sua/'.$id)->with('thongbao','Sửa sinh viên thành công');
    }

}
