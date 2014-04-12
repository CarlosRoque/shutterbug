<?php
    class Poll_model extends Model
	{
		function __construct()
		{
			parent :: Model();
		}
		
		function yes()
		{
			$ip = $_SERVER['REMOTE_ADDR'];
			$data = $this->db->get_where('poll', array('ip' => $ip));
			
			if($data->num_rows() == 0)
			{
				$data = array(
					'yes' => 1,
					'ip' => $ip
				);
				$this->db->insert('poll', $data);
				
				return true;
			}
			else
			{
				return false;
			}
		}
		
		function no()
		{
			$ip = $_SERVER['REMOTE_ADDR'];
			$data = $this->db->get_where('poll', array('ip' => $ip));
			
			if($data->num_rows() == 0)
			{
				$data = array(
					'no' => 1,
					'ip' => $ip
				);
				$this->db->insert('poll', $data);
				
				return true;
			}
			else
			{
				return false;
			}
		}
		
	}
?>