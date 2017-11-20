<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Models\UsersCModel;
use App\Http\Models\SinhVien;

use Illuminate\Support\Facades\Hash;
use App\User;






class UserController extends Controller
{
	public function getDanhSach()
	{
		$user = User::all();
		$sv = SinhVien::find(1);
		// dd($sv);
		return view('admin.user.danhsach' ,['user' =>$user , 'sinhvien' =>$sv]);
	}
	public function update_users_password($id, $pass)
	{
		$data = ['password'=> bcrypt($pass)];
		UsersCModel::update_users($id,$data);
	}
	
	public function get_Danhnhap()
	{

		return view('pages.login');
	}

	public function post_Danhnhap(Request $request)
	{
		//kiểm tra người dùng nhậpmssv,pass 
		$this->validate($request, 
			[
				'mssv' =>'required',
				'password' =>'required|min:3|max:32'

			] ,
		 [
		 	'mssv.required' =>'bạn chưa nhập mã số sinh viên',
		 	'password.required' =>'bạn chưa nhập Password',
		 	'password.min' =>'password không được nhỏ hơn 3 ký tự',
		 	'password.max' =>'password không được lớn hơn 32 ký tự',

		 ]
		);
		// dd($request->password);
		//nếu đăng nhập thành công return true
		if(Auth::attempt( ['mssv'=>$request->mssv ,'password'=>$request->password]))
		{			
			return redirect('/');
		}
		else
		{
			//nếu không thành công thì về lại đăng nhập
			return redirect('/dang-nhap')->with('thongbao','sai mã số sinh viên hoặc mật khẩu');
		}
	}
	// đăng xuất
	public function logout()
	{
		Auth::logout();
		//đăng xuất về lại trang hiện tại
		return redirect()->back();
	}
	// public function show_sinhvien()
	// {
	// 	//lấy id của user danh nhap hien tai
	// 	$id = Auth::id();
	// 	//lay thong tin ve user
	// 	$student = UsersCModel::get_sinhvien_by_id_user($id);		

	// 	return view('pages.student' , ['student' =>$student]);
	// }
	//đổi mật khẩu
	public function post_update(Request $request)
	{

		// kiểm tra người dùng nhậpmssv,pass 
		$this->validate($request, 
			[
				'password' =>'required',
				'Newpassword' =>'required|min:3|max:32|',
				'NewpasswordAgain' =>'required|same:Newpassword'
			] ,
		 [
		 	'password.required' =>'bạn chưa nhập mật khẩu hiện tại',
		 	'Newpassword.required' =>'Mật khẩu không để trống',
		 	'Newpassword.min'=>'Mật khẩu mới phải có ích nhất 3 ký tự',
		 	'Newpassword.max'=>'Mật khẩu mới tối đa 32 ký tự',	 	
		 	'NewpasswordAgain.required' =>'Mật khẩu không để trống',
		 	'NewpasswordAgain.same' =>'mật khẩu nhập lại chưa trùng khớp'
		 ]
		);
		$matkhaucu = $request->password;
		$matkhaumoi = $request->Newpassword;
		$matkhaumoiAgain = $request->NewpasswordAgain;
		//kiem tra mat khau hien tai co bang mat khau moi
		if(!Hash::check( $matkhaucu,	Auth::user()->password ))
		{
			return redirect()->back()->with('thongbao','Mật khẩu củ không đúng !');
		}
		//kiểm tra nhập lại mật khẩu mới 
		elseif ($matkhaumoiAgain !=$matkhaumoi) {
			return redirect()->back()->with('thongbao','Xác nhận mật khẩu không đúng !');
		}
		else 
		{
			//nếu đúng thì sửa 
			$request ->user()->fill( ['password' =>Hash::make($matkhaumoi)] ) ->save();
			return redirect()->back()->with('thongbao','Đổi mật khẩu thành công !');
		}		
	}
	public function check_admin($id)
	{
		$role = User::find($id);
		$b = $role->role;
		if($b ==1)
		{
			return true;

		}
		return false;
	}
	public function getDangNhap()
	{
		return view('admin.login');
	}
	//dang nhap admin
	public function postDangNhap(Request $request)
	{
		//kiểm tra người dùng nhậpmssv,pass 
		$this->validate($request, 
			[
				'mssv' =>'required',
				'password' =>'required|min:3|max:32'

			] ,
		 [
		 	'mssv.required' =>'bạn chưa nhập mã số ',
		 	'password.required' =>'bạn chưa nhập Password',
		 	'password.min' =>'password không được nhỏ hơn 3 ký tự',
		 	'password.max' =>'password không được lớn hơn 32 ký tự',

		 ]
		);
		//nếu đăng nhập thành công return true
		if(Auth::attempt( ['mssv'=>$request->mssv ,'password'=>$request->password]))
		{			
			return redirect('admin/loaitin/danhsach');
		}
		else
		{
			//nếu không thành công thì về lại đăng nhập
			return redirect('admin')->with('thongbao','Sai mã số  hoặc mật khẩu');
		}
	}
	public function getDangXuat()
	{
		Auth::logout();
		//đăng xuất về lại trang chủ
		return redirect('/');
	}
	public function getThem()
	{
		return view('admin.user.them');
	}
	public function postThem(Request $request)
	{
		//kiểm tra người dùng nhậpmssv,pass 
		$this->validate($request, 
			[
				'mssv' =>'required|unique:users,mssv',
				'password' =>'required|min:3|max:32|same:re-password'

			] ,
		 [
		 	'mssv.required' =>'bạn chưa nhập mã số ',
		 	'mssv.unique' =>'Mã số bị trùng',
		 	'password.required' =>'bạn chưa nhập Password',
		 	'password.same' =>'password nhập lai chưa đúng',
		 	'password.min' =>'password không được nhỏ hơn 3 ký tự',
		 	'password.max' =>'password không được lớn hơn 32 ký tự',

		 ]
		);
		$user = new User;
        $user->name = $request->ten;
        $user->mssv = $request->mssv;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        // dd($user);
        $user->save();
        return redirect('admin/user/them')->with('thongbao','Thêm User thành công');
	}
	public function getXoa($id)
	{
		$user = User::find($id);
		$user->delete();
		return redirect('admin/user/danhsach')->with('thongbao','Xóa User thành công');
	}
	public function getSua($id)
	{
		$user = User::find($id);
		return view('admin.user.sua' , ['user' =>$user]);

	}
	public function postSua(Request $request , $id)
	{
		//kiểm tra người dùng nhậpmssv,pass 
		$this->validate($request, 
			[
				'mssv' =>'required',
				'password' =>'required|min:3|same:re-password'

			] ,
		 [
		 	'mssv.required' =>'bạn chưa nhập mã số ',		 	
		 	'password.required' =>'bạn chưa nhập Password',
		 	'password.same' =>'Mật khẩu nhập lại chưa đúng',
		 	'password.min' =>'password không được nhỏ hơn 3 ký tự',
		 	'password.max' =>'password không được lớn hơn 32 ký tự',
		 ]
		);
		$user = User::find($id);
		$user->name = $request->ten;
        $user->mssv = $request->mssv;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;

        $user->save();
        return redirect('admin/user/sua/'.$id)->with('thongbao','Sửa User thành công');
	}
}
?>