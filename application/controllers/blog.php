<?php
	class Blog extends Controller {
	
		function __construct()
		{
			parent::Controller();
		}
	
		function index()
		{
			// Models Being Loaded
			$this->load->model('Blog_model');
			$this->load->model("Comments");
			
			// Query Data
			$data['query'] = $this->Blog_model->get_blogs();
		
			$data['title'] = "The Blog | Shutterbug Photo Mall";
			$data['header'] = "shared/general_header.php";
			$data['page'] = "blog/blog_view.php";
			
			$this->load->view('index.tpl.php', $data);
		}
		
		function login()
		{
			$data['title'] = "Login | The Blog | Shutterbug Photo Mall";
			$data['header'] = "shared/general_header.php";
			$data['page'] = "blog/login_view.php";
			
			$this->load->view('index.tpl.php', $data);
		}
		
		function logout()
		{
			$this->session->sess_destroy();
			redirect('blog/');
		}
		
		function comment_view($cid)
		{
			// Models Being Loaded
			$this->load->model('Blog_model');
			$this->load->model("Comments");
			
			// Query Data
			$data['blogs'] = $this->Blog_model->get_current($cid);
			$data['comments'] = $this->Comments->get_approved($cid);
			
			$data['title'] = "Comments | The Blog | Shutterbug Photo Mall";
			$data['header'] = "shared/general_header.php";
			$data['page'] = "blog/comment_view.php";
			
			$this->load->view('index.tpl.php', $data);
		}
		
		function comment_add($cid)
		{
			// Models Being Loaded
			$this->load->model('Comments');
			
			// Query Data
			$this->Comments->comment_add($_POST);
			
			redirect('blog/comment_view/'.$cid);
		}
	}
?>
