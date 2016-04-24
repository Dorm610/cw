<?php 
class clientdal extends CI_Model{
	
	public function __construct(){
        parent::__construct();
    }

	public function GetClientList()
	{
		$sql = " select * from staffs;";
		$query = $this->db->query($sql);
		return $query->result_array();
	} 
}

 ?>