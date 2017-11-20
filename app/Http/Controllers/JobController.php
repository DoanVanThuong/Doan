<?php 


namespace App\Http\Controllers;

use Illuminate\Http\Request;
//them BookQmodel
use App\Http\Models\JobQModel;
use App\Http\Models\Slide;

/**
* 
*/
class JobController extends Controller
{
	
	// public function show_list_job(){
	// 	$job = JobQModel::get_job();
	// 	$slide_header = Slide::getSlide_by_type(1,4);

	// 	// dd($job);
	// 	return view('pages.jobs', [ 
	// 		'v_job' => $job,
	// 		'slide_header' =>$slide_header,


	// ]);
	// }
	public function viewContentJob($slug){
		$id = JobQModel::get_id_job_by_slug($slug);
		$data = JobQModel::get_Job_by_ID($id);
		$relative = JobQModel::get_job();
		$slide_company = Slide::getSlide_by_type(4,6);
		$slide_header = Slide::getSlide_by_type(1,4);
	// dd($data);
		return view('pages.jobs-detail',['data'=>$data,'id'=>$id , 'relative' =>$relative,'slide_company' =>$slide_company,'slide_header' =>$slide_header]);
	}
	
}

 ?>