<?php
    class Users extends Model
	{
		function __construct()
		{
			parent :: Model();
		}
		
		function user_login($post)
		{
			if($post == "")
			{
				redirect('admin/login');
			}
			
			// Check Database To See If User Exists
			$user = $post['user'];
			$pass = sha1($post['pass']);
			
			$query = $this->db->get_where('users', array('user' => $user));
			
			if($query->num_rows() > 0)
			{
				// if user exists, check against password
				$row = $query->row_array();
				if($row['pass'] === $pass)
				{
					// set sessions and log user in
					unset($row['pass']);
					$this->session->set_userdata('user', "true");
					$this->session->set_userdata('user_info', $row);
					
					return true;
				}
				else{
					echo "Username / Password is Incorrect.";
					return false;
				}
			}
			else
			{
				echo "Username Does Not Exist";
				return false;
			}
		}
	}
?>