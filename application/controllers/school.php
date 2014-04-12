<?php
    class School extends Controller
	{
		function __construct()
		{
			parent :: Controller();
		}
		
		function schedule()
		{
			// Load Model
			$this->load->model('School_model');
			
			// Load Query
			$data['query'] = $this->School_model->get_classes();
			
			$data['title'] = "Schedule | The Photo School | Shutterbug Photo Mall";
			$data['header'] = "shared/general_header.php";
			$data['page'] = "school/schedule_view.php";
			
			$this->load->view('index.tpl.php', $data);
		}
		
		function information()
		{
			$data['title'] = "Information | The Photo School | Shutterbug Photo Mall";
			$data['header'] = "shared/general_header.php";
			$data['page'] = "school/info_view.php";
			
			$this->load->view('index.tpl.php', $data);
		}
		
		function class_info()
		{
			$data['title'] = "Class Explanation | The Photo School | Shutterbug Photo Mall";
			$data['header'] = "shared/general_header.php";
			$data['page'] = "school/cinfo_view.php";
			
			$this->load->view('index.tpl.php', $data);
		}
	}
?>