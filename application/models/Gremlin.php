<?php
//cannot have redundant model and controller names
class Gremlin extends CI_Model
{
	function test()
	{
		return $this->db->query("SELECT * FROM messages order by created_at DESC")->result_array();
	}

	function add_test($data)
	{
		$query = "INSERT into messages (idusers, message, created_at, updated_at) VALUES (".rand(1,20).",'".$data['text']."', NOW(), NOW())";
		return $this->db->query($query);
	}
}
 ?>