<?php
    class About extends Controller
	{
		function __contruct()
		{
			parent :: Controller();
		}
		
		function company()
		{
			$data['title'] = "Company Information | About Us | Shutterbug Photo Mall";
			$data['header'] = "shared/general_header.php";
			$data['page'] = "about/company_view.php";
			
			$this->load->view('index.tpl.php', $data);
		}
		
		function contact()
		{
			$data['title'] = "Contact Information | About Us | Shutterbug Photo Mall";
			$data['header'] = "shared/general_header.php";
			$data['page'] = "about/contact_view.php";
			
			$this->load->view('index.tpl.php', $data);
		}
		
		function career()
		{
			$data['title'] = "Careers With Us | About Us | Shutterbug Photo Mall";
			$data['header'] = "shared/general_header.php";
			$data['page'] = "about/career_view.php";
			
			$this->load->view('index.tpl.php', $data);
		}
	}
?>