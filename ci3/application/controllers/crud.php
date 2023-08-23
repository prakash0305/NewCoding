<?php
class crud extends CI_Controller
{
	public function index()
	{
		$this -> load ->model('crud_model');

		$data['data_details']=$this -> crud_model -> getProducts();

		$this -> load -> view('crud_view',$data);
	}
	public function addProduct()
	{
		$this -> form_validation -> set_rules('id','contact id','trim|required');
		$this -> form_validation -> set_rules('name','contact name','trim|required');
		$this -> form_validation -> set_rules('mail','contact mail','trim|required');
		$this -> form_validation -> set_rules('number','contact number','trim|required');

		if($this -> form_validation -> run() == false)
		{
			$data_error =['error' => validation_errors()];
			$this -> session -> set_flashdata($data_error);
		}
		else
		{
			$this -> load ->model('crud_model');
			$result = $this -> crud_model -> insertproduct([
				'id' => $this -> input -> post('id'),
				'student_name'=>$this -> input -> post('name'),
				'student_mail' => $this -> input -> post('mail'),
				 'student_mobile'=>$this -> input -> post('number')
				]);
			if($result)
			{
				$this -> session -> set_flashdata('inserted',"Your data has been successfully inserted");
			}
		}
		redirect('crud');
	}
	 public function editcontact($id)
	 {
	 	$this -> load -> model('crud_model');
	    $data['singlecontact'] = $this -> crud_model -> getSingleContact($id);
	    $this -> load -> view('edit_view',$data);

	 }
	 public function update($id)
	 {
	 	$this -> form_validation -> set_rules('id','contact id','trim|required');
		$this -> form_validation -> set_rules('name','contact name','trim|required');
		$this -> form_validation -> set_rules('mail','contact mail','trim|required');
		$this -> form_validation -> set_rules('number','contact number','trim|required');

		if($this -> form_validation -> run() == false)
		{
			$data_error =['error' => validation_errors()];
			$this -> session -> set_flashdata($data_error);
		}
		else
		{
			$this -> load ->model('crud_model');
			$result = $this -> crud_model -> updatecontact([
				'id' => $this -> input -> post('id'),
				'student_name'=>$this -> input -> post('name'),
				'student_mail' => $this -> input -> post('mail'),
				 'student_mobile'=>$this -> input -> post('number')],$id);
			if($result)
			{
				$this -> session -> set_flashdata('updated',"Your data has been successfully updated");
			}
		}
		redirect('crud');
	 }
	 public function deletecontact($id)
	 {
	 	$this -> load ->model('crud_model');
	 	$result = $this -> crud_model -> deletedetail($id);
	 	if($result == true)
	 	{
	 		$this -> session -> set_flashdata('deleted',"Your data has been successfully deleted");
	 	}
	 	redirect('crud');

	 }
}
?>