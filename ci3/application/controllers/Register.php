<?php
class Register extends CI_Controller
{
	public function index()
	{
		$this -> load -> view('Registration_form'); 

    }
    public function edit($id)
    {
    	$this -> load -> model('Regmodel');
    	result['data'] =$this -> Regmodel -> editdata( $id);
    	$this -> load -> view('display',$result);

    }
	public function student()
	{
		$mes['msg']='YOUR REGISTRATION FORM';
		$this -> load -> view('Registration_form',$mes);
	}
	public function saveData()
	{
		/*
		$stname = $this -> input -> post('stname');
		$stmail = $this -> input -> post('stmail');
		$stnumber = $this -> input -> post('stnumber');
		*/
		extract($_POST);
		$data=[
			'student_name'=>$stname,
			'student_mail'=>$stmail,
			'student_mobile'=>$stnumber
		];
		$this -> load -> model('Regmodel');
		$result = $this -> Regmodel -> insertdata($data);
		if($result)
		{
			$res['status']='successfully inserted';
			$res['test']=200;
			$this -> load -> view('Registration_form',$res);
			redirect('http://localhost/ci3/Register/student');
		}
		else
		{
			$res['status']='Error while inserting data';
			$this -> load -> view('Registration_form',$res);
			redirect('http://localhost/ci3/Register/student');

		}
		

	}
	public function fetchData()
	{
		$this -> load ->model('Regmodel');
		$result['table'] = $this -> Regmodel -> getRecord();
		$this -> load ->view('display',$result);
	}

}