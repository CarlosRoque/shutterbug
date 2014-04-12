<?php
    class Photobook extends Controller
	{
		function __construct()
		{
			parent :: Controller();
		}
		
		function book_download()
		{
			$data['title'] = "Photobook Software Download | Photobooks-Calendars | Shutterbug Photo Mall";
			$data['header'] = "shared/general_header.php";
			$data['page'] = "photobook/book_dl_view.php";
			
			$this->load->view('index.tpl.php', $data);
		}
		
		function book_price()
		{
			$data['title'] = "Photobook Prices | Photobooks-Calendars | Shutterbug Photo Mall";
			$data['header'] = "shared/general_header.php";
			$data['page'] = "photobook/book_price_view.php";
			
			$this->load->view('index.tpl.php', $data);
		}
		
		function calendar_download()
		{
			$data['title'] = "Calendar Software Download | Photobooks-Calendars | Shutterbug Photo Mall";
			$data['header'] = "shared/general_header.php";
			$data['page'] = "photobook/cal_dl_view.php";
			
			$this->load->view('index.tpl.php', $data);
		}
		
		function calendar_price()
		{
			$data['title'] = "Calendar Prices | Photobooks-Calendars | Shutterbug Photo Mall";
			$data['header'] = "shared/general_header.php";
			$data['page'] = "photobook/cal_price_view.php";
			
			$this->load->view('index.tpl.php', $data);
		}
	}
?>