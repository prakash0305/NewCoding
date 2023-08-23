<?php
class crud_model extends CI_Model
{
	public function getProducts()
	{
		$this -> load -> database();
		$query=$this -> db -> get('studentreg');
		if($query)
		{
			return $query -> result();
		}
	}
	public function insertproduct($data)
	{
		$this -> load -> database();
		$query = $this -> db -> insert('studentreg',$data);
        if($query)
        {
        	return true;
        }
        else
        {
        	return false;
        }
	}
	public function getSingleContact($id)
	{
		$this -> load -> database();
		$this -> db -> where('id',$id);
		$query= $this -> db -> get('studentreg');
		if($query)
		{
			return $query -> row();
		}

	}
	public function updatecontact($data,$id)
	{
		$this -> load -> database();
		$this -> db -> where('id',$id);
		$query= $this -> db -> update('studentreg',$data);
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}

	}
	public function deletedetail($id)
	{
		$this -> load -> database();
		$this -> db -> where('id',$id);
		$query= $this -> db -> delete('studentreg');
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}

	}
}
?>