<?php
class Admin_blog extends Controller {
	
	function __construct()
	{
		parent::Controller();
		
		$this->load->scaffolding('blogs');
	}
	
	function index($xid = "")
	{
		$this->load->Model("Users");
		$this->load->Model("Blogs");
		$this->load->Model("Comments");
		
		// data for the comments section
		$data['queued'] = $this->Comments->get_queue();
		
		// checks whether the user is logging in or the type of user is above a "user"
		if(isset($_POST['user'], $_POST['pass'])){
			if(($this->Users->user_login($_POST['user'], $_POST['pass'])) == true){
				$type = $this->Users->user_level();
			
				if($type >= 5){
					$this->load->view('header.php');
					$this->load->view("admin_panel.php", $data);
					$this->load->view('footer.php');
				}
				else{
					redirect('admin/user_view/');
				}
			}
		}
		else{
			if($xid == true){
				$this->load->view('header.php');
				$this->load->view("admin_panel.php", $data);
				$this->load->view('footer.php');
			}
			else{
				redirect('blog/');
			}
		}
		
	}
	
	function user_view()
	{
		$this->load->model('Blogs');
		$data['query'] = $this->Blogs->get_blogs();
		
		$this->load->view('header.php');
		$this->load->view('blog_view.php', $data);
		$this->load->view('footer.php');
	}
	
	function user_add()
	{
		$this->load->model('Users');
		$this->Users->user_create($_POST['user'], $_POST['pass'], $_POST['level'], 
								$_POST['name'], $_POST['email']);
		echo "This User Has Been Added Successfully!";
	}
	
	function entry_add()
	{
		$this->load->model('Blogs');
		$this->Blogs->insert($_POST);
		echo "This Entry Has Been Added Successfully!";
	}
	
	function entry_delete($id)
	{
		$this->load->model('Blogs');
		$this->Blogs->delete($id);
		redirect("blog/");
	}
	
	function comment_approve($xid)
	{
		$this->load->model("Comments");
		$this->Comments->approve($xid);
		echo "This comment was approved!";
	}
	
	function comment_delete($xid)
	{
		$this->load->model("Comments");
		$this->Comments->delete($xid);
		echo "This comment was deleted!";
	}
}
?>