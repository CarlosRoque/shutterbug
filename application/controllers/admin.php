<?php
    class Admin extends Controller
	{
		function __construct()
		{
			parent :: Controller();
			
			$this->output->enable_profiler(false);
		}
		
		function index()
		{
			if($this->session->userdata('user') == "true")
			{
				redirect('admin/admin_panel');
			}
			else{
				redirect('admin/login');
			}
		}
		
		function login()
		{
			$data['title'] = "Administrative Panel Login | Shutterbug Photo Mall";
			$data['header'] = "shared/general_header.php";
			$data['page'] = "admin/login_view.php";
			
			$this->load->view('index.tpl.php', $data);
		}
		
		function check_log()
		{
			// load the model needed
			$this->load->model('Users');
			
			// run function to login and check credentials
			$login = $this->Users->user_login($_POST);
			
			if($login == true)
			{
				redirect('admin/admin_panel');
			}
			else
			{
				$this->session->set_flashdata('login_fail','true');
				redirect('admin/login');
			}
		}
		
		function admin_panel()
		{
			// load the models needed
			$this->load->Model('School_model');
			$this->load->Model('Comments');
			
			// load data into page
			$data['classes'] = $this->School_model->get_classes();
			
			$data['title'] = "Administrative Panel | Shutterbug Photo Mall";
			$data['header'] = "shared/general_header.php";
			$data['page'] = "admin/panel_view.php";
			
			if($this->session->userdata('user') == "true")
			{
				$this->load->view('index.tpl.php', $data);
			}
			else{
				redirect('admin/');
			}
		}
		
		function edit_class()
		{
			// This Feature Will Be Added In the Future!
		}
		
		function remove_class($cid)
		{
			// load the models needed
			$this->load->Model('School_model');
			
			// load data into page
			if($this->session->userdata('user') == "true")
			{
				if($this->School_model->cancel_class($cid))
				{
					redirect('admin/admin_panel');			
				}
			}
		}
		
		function add_class()
		{
			// load the models needed
			$this->load->Model('School_model');
			
			// load data into page
			if($this->session->userdata('user') == "true")
			{
				if($this->School_model->add_class($_POST))
				{
					redirect('admin/admin_panel');					
				}
			}
		}
		
		
		// ---------- This Starts the Blog Management -------------------
		function manage_blog()
		{
			// load the models needed
			$this->load->Model('Blog_model');
			
			// load data into page
			$data['blogs'] = $this->Blog_model->get_blogs();
			
			$data['title'] = "Blog Management | Administrative Panel | Shutterbug Photo Mall";
			$data['header'] = "shared/general_header.php";
			$data['page'] = "admin/mblog_view.php";
			
			if($this->session->userdata('user') == "true")
			{
				$this->load->view('index.tpl.php', $data);
			}
			else{
				redirect('admin/');
			}
		}
		
		function manage_comments()
		{
			// load the models needed
			$this->load->Model('Comments');
			
			// load data into page
			$data['comments'] = $this->Comments->get_queue();
			
			$data['title'] = "Blog Management | Administrative Panel | Shutterbug Photo Mall";
			$data['header'] = "shared/general_header.php";
			$data['page'] = "admin/mcomments_view.php";
			
			if($this->session->userdata('user') == "true")
			{
				$this->load->view('index.tpl.php', $data);
			}
			else{
				redirect('admin/');
			}
		}
		
		function entry_add()
		{
			$this->load->model('Blog_model');
			if($this->Blog_model->insert($_POST))
			{
				echo "<p>Thanks for your add. To add another refresh your page.</p>";
			}
		}
		
		function entry_remove($bid)
		{
			$this->load->model('Blog_model');
			$this->Blog_model->delete($bid);
			redirect("admin/manage_blog");
		}
		
		function comments_approve($cid)
		{
			// Models Being Loaded
			$this->load->model('Comments');
			
			// Query Data
			$this->Comments->approve($cid);
			
			redirect('admin/manage_comments/');
		}
		
		function comments_remove($cid)
		{
			// Models Being Loaded
			$this->load->model('Comments');
			
			// Query Data
			$this->Comments->delete($cid);
			
			redirect('admin/manage_comments/');
		}
		
		function logout()
		{
			// Updates Last Login Time
			$cid = $this->session->userdata('user_info');
			$this->db->query("UPDATE `sbpm_users` SET `last_log` = CURRENT_TIMESTAMP WHERE `id` = ".$cid['id']."");
			
			$this->session->sess_destroy();
			
			redirect('admin/');
		}
	}
?>