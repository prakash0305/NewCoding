<?php
class Regmodel extends CI_Model
{
	public function editdata($id)
	{
		$this -> load -> database();
		$this -> db -> where('id',$id);
		return $this -> db -> get('studentreg') -> result();
	}
	public function insertdata($data)
	{
		$this -> load -> database();
		return $this -> db -> insert('studentreg',$data);

	}
	public function getRecord()
	{
		$this -> load -> database();
		return $this -> db -> get('studentreg') -> result();
	}
}