<?php
    class School_model extends Model
	{
		function __contruct()
		{
			parent :: Model();
		}
		
		function get_classes()
		{
			return $query = $this->db->get('classes');
		}
		
		function add_class($post)
		{
			if($post == "")
			{
				return false;
			}
			
			$data = array(
				'C_Name' => $post['C_Name'],
				'C_Date' => $post['C_Date'],
				'C_Time' => $post['C_Time'],
				'C_Price' => $post['C_Price'],
				'C_Desc' => $post['C_Desc']
			);
			
			$this->db->insert('classes', $data) or die('Adding Class Failed');
			return true;
		}
		
		function cancel_class($cid)
		{
			if($cid == "")
			{
				return false;
			}
			else
			{
				$this->db->delete('classes', array('C_ID' => $cid));
				return true;
			}
		}
		
	}
?>