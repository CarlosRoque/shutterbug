<?php
    class Downloads extends Controller
	{
		function __contruct()
		{
			parent :: Controller();
		}
		
		function index()
		{
			$data['title'] = "Downloads | Shutterbug Photo Mall";
			$data['header'] = "shared/general_header.php";
			$data['page'] = "downloads/index_view.php";
			
			$this->load->view('index.tpl.php', $data);
		}
	}
?>