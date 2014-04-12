<div class="content_wrap">
	<?php $this->load->view('school/shared/school_tab.php'); ?>
	<div class="clear"></div>
	<?php foreach($query->result() as $row): ?>
		<div class="box_panel school_box">
			<h3><?php echo $row->C_Name; ?></h3>
			<ul>
				<li><strong>Dates: </strong><?php echo $row->C_Date; ?></li>
				<li><strong>Times: </strong><?php echo $row->C_Time; ?></li>
				<li><strong>Price: </strong><?php echo $row->C_Price; ?></li>
			</ul>
			<h5>Description:</h5>
			<p><?php echo $row->C_Desc; ?></p>
		</div>
	<?php endforeach; ?>
</div>