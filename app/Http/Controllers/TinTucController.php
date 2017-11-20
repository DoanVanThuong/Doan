<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\TinTuc;
use App\Http\Models\LoaiTin;
use App\Http\Models\Comment;
use App\Http\Models\NewsQModel;
use App\User;







class TinTucController extends Controller
{
    public function getDanhSach()
    {
    	$tintuc = TinTuc::orderBy('created_at')->get();

    	return view('admin.tintuc.danhsach' , ['tintuc' =>$tintuc]);
    }
    public function getThem()
    {
    	//hiện trang tin và danh sách loại tin trước khi thêm
    	$loaitin = LoaiTin::all();
    	return view('admin.tintuc.them' ,['loaitin' =>$loaitin]);

    }
     public function postThem(Request $request)
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
        $tintuc = new TinTuc;
        $tintuc->name = $request->tieude;
        $tintuc->slug = str_slug($request->tieude);
        $tintuc->sumary = $request->tomtat;
        $tintuc->news_category_id = $request->loaitin;
        $tintuc->author = $request->tacgia;
        // $tintuc->date = $request->date;
        $tintuc->content = $request->noidung;

        //kiem tra upload anh
        if($request->hasFile('anh'))
        {
            $file = $request->file('anh');
            $format =$file->getClientOriginalExtension();
            if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  )
                {
                    return redirect('admin/tintuc/them')->with('thongbao','file ảnh phải có đuôi jpg,png,jpeg,bmp');
                }
            
            //lay ten hinh
            $tenhinh = $file->getClientOriginalName();
            //lay ten hinh + chuoi ngau nhien
            $hinh = str_random(4)."_".$tenhinh;
            //neu random trung thi chay lai random lai
            while (file_exists("img/news/".$hinh)) {
                 $hinh = str_random(4)."_".$tenhinh;
            }
            //luu hinh
            $file->move('img/news', $hinh);
            $tintuc->image = 'img/news/'.$hinh;
            // echo $file;

        }
        else
        {
            $tintuc->image = " ";
        }
    	$tintuc->save();
        return redirect('admin/tintuc/them')->with('thongbao','Thêm tin thành công');
    }
    public function getSua($id)
    {
        //hiện trang tin và danh sách loại tin trước khi thêm
        $loaitin = LoaiTin::all();
        //lấy ra id tin tuc sua 
        $tintuc = TinTuc::find($id);
        $id = $tintuc->id;
        //lấy các comment thuộc tin
        $comment = NewsQModel::getComment_by_id_news($id);
        
        // dd($comment);
        return view('admin.tintuc.sua' , ['tintuc' =>$tintuc , 'loaitin' =>$loaitin , 'comment' =>$comment]);


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
        $tintuc = TinTuc::find($id);
        $tintuc->name = $request->tieude;
        $tintuc->slug = str_slug($request->tieude);
        $tintuc->sumary = $request->tomtat;
        $tintuc->news_category_id = $request->loaitin;
        $tintuc->author = $request->tacgia;
        // $tintuc->date = $request->date;
        $tintuc->content = $request->noidung;

        //kiem tra upload anh
        if($request->hasFile('anh'))
        {
            $file = $request->file('anh');
            $format =$file->getClientOriginalExtension();
            if($format !='jpg' && $format !='png' && $format !='jpeg' && $format !='bmp'  )
                {
                    return redirect('admin/tintuc/sua/'.$id)->with('thongbao','file ảnh phải có đuôi jpg,png,jpeg,bmp');
                }
            
            //lay ten hinh
            $tenhinh = $file->getClientOriginalName();
            //lay ten hinh + chuoi ngau nhien
            $hinh = str_random(4)."_".$tenhinh;
            //neu random trung thi chay lai random lai
            while (file_exists("img/news/".$hinh)) {
                 $hinh = str_random(4)."_".$tenhinh;
            }
            $file->move('img/news', $hinh);
            //xóa file cũ
            unlink($tintuc->image);

            $tintuc->image = 'img/news/'.$hinh;
            // echo $file;

        }
        else
        {
            //nếu không thay hình 
        }
        $tintuc->save();
        return redirect('admin/tintuc/sua/'.$id)->with('thongbao','sửa thành công');

    }
    public function getXoa($id)
    {
        $tintuc = TinTuc::find($id);
        $tintuc->delete();
        //xóa file ảnh cũ
        unlink($tintuc->image);
        return redirect('/admin/tintuc/danhsach')->with('thongbao','xóa thành công');  
    }
}
