<?php
	class Home extends Controller
	{
		function __construct()
		{
			parent :: controller();
		}
		
		function index()
		{
			$data['title'] = "Welcome to Shutterbug Photo Mall";
			$data['header'] = "shared/general_header.php";
			$data['page'] = "home/index_view.php";
			
			$this->load->view('index.tpl.php', $data);
		}
		
		function poll($pid)
		{
			// Load Model Needed
			$this->load->model('Poll_model');
			
			// Use Model (checks which poll is being voted on)
			if($pid == 1)
			{
				if( $this->Poll_model->yes() )
				{
					echo "Thanks for your vote! ".anchor('home/view_poll','View Results', array('class'=>'result_view'));
				}
				else{
					echo "You may not vote again. You have already voted once. ".anchor('home/view_poll','Results', array('class'=>'result_view'));
				}
			}
			else if($pid == 2)
			{
				if( $this->Poll_model->no() )
				{
					echo "Thanks for your vote! ".anchor('home/view_poll','View Results', array('class'=>'result_view'));
				}
				else{
					echo "You may not vote again. You have already voted once. ".anchor('home/view_poll','Results', array('class'=>'result_view'));
				}
			}
		}
		
		function view_poll()
		{		
			// Load the Poll View
			$yes = $this->db->get_where('poll', array('yes'=>'1'));
			$no = $this->db->get_where('poll', array('no'=>'1'));
			
			// Display Results
			echo "<table id='poll_table'>
				<tr><th>Liked</th><th>Disliked</th></tr>
				<tr><td>$yes->num_rows</td><td>$no->num_rows</td></tr></table>";
		}
	}
?>