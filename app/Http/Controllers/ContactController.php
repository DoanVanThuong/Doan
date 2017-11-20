<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//them BookQmodel
use App\Http\Models\BookQModel;
use App\Http\Models\NewsQModel;
use App\Http\Models\JobQModel;
use App\Http\Models\Contact;



/**
* 
*/
class ContactController extends Controller
{
	
	// public function view_contact(){
	// 		$news_job = JobQModel::get_job();
	// 		return view('pages.contact',['jobs'=>$news_job]);
	// }
	public function getDanhSach()
	{
		$lienhe = Contact::all();
		// dd($lienhe);
		return view('admin.lienhe.danhsach' ,['lienhe' =>$lienhe]);
	}
	public function getXoa($id)
	{
		$lienhe = Contact::find($id);
		$lienhe->delete();
		return redirect('/admin/lienhe/danhsach')->with('thongbao','xóa thành công');	
	}
	public function postThem(Request $request)
	{
		$this->validate($request , [] ,[]);
		$lienhe = new Contact();
		$lienhe->name = $request->ten;
		$lienhe->mssv = $request->mssv;
		$lienhe->email =$request->email;
		$lienhe->phone =$request->sdt;
		$lienhe->content =$request->noidung;
		//kiem tra upload file
        if($request->hasFile('upload_cont_img'))
        {
            $file = $request->file('upload_cont_img');
            $format =$file->getClientOriginalExtension();
            //lay ten hinh + chuoi ngau nhien
           	//nếu file la hình ảnh
            if($format =='jpg' && $format =='png' && $format =='jpeg' && $format =='bmp'  )
                {
           			 $tenhinh = $file->getClientOriginalName();

                    $hinh = str_random(4)."_".$tenhinh;
		            //neu random trung thi chay lai random lai
		            while (file_exists("admin_asset/upload/contact/img/news/".$hinh)) {
		                 $hinh = str_random(4)."_".$tenhinh;
		            }
		            
		            //luu hinh
		            $file->move('admin_asset/upload/contact/img/', $hinh);
		            $lienhe->file = 'admin_asset/upload/contact/img/'.$hinh;
                }
            //neu file la file khac anh
            else
            {
	            //lay ten hinh
	            $tenhinh = $file->getClientOriginalName();
	            //lay ten hinh + chuoi ngau nhien
	            $hinh = str_random(4)."_".$tenhinh;
	            //neu random trung thi chay lai random lai
	            while (file_exists("admin_asset/upload/contact/img/file/".$hinh)) {
	                 $hinh = str_random(4)."_".$tenhinh;
	            }
	            //luu hinh
	            $file->move('admin_asset/upload/contact/file/', $hinh);
	            $lienhe->file = 'admin_asset/upload/contact/file/'.$hinh;
            }
            
           

        }
        else
        {
            $lienhe->file = " ";
        }

		$lienhe->save();
		//sau khi thêm xong trở lại trang thêm
		return redirect('/lien-he')->with('thongbao','Gửi thông tin thành công');

	}
}
?>