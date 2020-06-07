<?php

namespace app\services;
use App\registModel;
use DB;

class servicesData
{
	public function getFormData($data)
	{
		// var_dump($data['name']);
		
		$registModel=new registModel;

		$registModel->name=$data['name'];
		$registModel->age=$data['age'];
		$registModel->courseType=$data['courseType'];
		$registModel->address=$data['address'];
		$registModel->country=$data['country'];
		$registModel->city=$data['city'];
		$registModel->mobile=$data['mobile'];
		$registModel->email=$data['email'];
		$registModel->password=$data['password'];
		$registModel->save();

		
		
	}

	public function getCourseType()
	{
		// $registModel = course_type::all();
	$data = DB::select('SELECT courses FROM course_type');
		return json_encode($data);
	
	}

	public function getCountry()
	{
		$data = DB::select('SELECT * FROM Country');
		return json_encode($data);
		
		//return view('student.registration',$data);
		
	}

	public function getCountryId($id)
	{
		//return $countryId=$id;
		$data = DB::select('SELECT * FROM Country');
		return json_encode($data);
		
	}



	public function getStudentDetails()
	{
		$data=DB::select('SELECT * FROM student_registration');
		return view('student.studentDetails', ["data"=>$data]);
	}


}


?>