<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Http\Models\TinTuc;
use App\Http\Models\Comment;
use App\Http\Models\SinhVien;

class CommentController extends Controller
{
    
    public function postThem( Request $request , $id)
	{
		$this->validate($request , 
			[
				'comment' =>'required'


		], 
		[
			'comment.required' =>'Bạn chưa nhập tên thể loại',
			

		]);
		// lấy id tin tức
		$idTinTuc = $id ;
		$tintuc = TinTuc::find($id);
		$slug = $tintuc->slug;
		$comment = new Comment;
		$comment->news_id =$idTinTuc;
		$comment->content =$request->comment;

		$comment->user_id =Auth::user()->id;
		
		$comment->save();
		
		return redirect()->back();
	}
	public function getXoa($id)
	{
		$comment = Comment::find($id);

		$comment->delete();
		return redirect()->back()->with('thongbao','xóa comment thành công');  
	}
	public function ajaxComment(Request $request, $id)
	{
		//nhập comment  
		$cm = new Comment;
		$cm->news_id = $request->news_id;
		$cm->content = $request->content;
		//lưu id user vừa nập
		$cm->user_id =Auth::user()->id;
		$cm->save();
		//hiện cái comment vừa nhập
		$item = new Comment;
		$i = $item::find($cm->id);
		// dd($i);
		//hiện thong tin user
		$student = new SinhVien;
		$s = $student::where('user_id',$cm->user_id)->first();

		
		//dd($cm->id);
		return view('templates.ajax.comments' ,['item'=>$i , 'image'=>$s]);
	}
	

}
