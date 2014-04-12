<div id="blog_wrap" class="grid_12">
	<div class="grid_12 grid_padding">
		<p class="right_top">
			<?
				if(($this->session->userdata('user') != "true")){
					echo anchor('admin/', 'Admin Panel');
				}
				else{
					$user = $this->session->userdata('user_info');
					echo "Welcome Back ".$user['name']." If this isn't you ".anchor('admin/logout', 'click here to logout.');
				}
			?>
			<?
				$type = $this->session->userdata('level');
				if($type >= 5){
					echo "|| ".anchor('admin/index/true', 'Admin Panel');
				}
			?>
		</p>
	</div>
	<div class="clear"></div>
	
	<?php foreach($query->result() as $row): ?>
	
	<div class='entry_box'>
		
	<!-- ********** START OF THE BLOG VIEW *********** -->
		<div class="grid_padding title_wrap">
			
			<div class="number_id">
				<h3><? echo $row->id;?></h3>
			</div>
				
			<h3><? echo $row->title?></h3>
			
			<h5>
				This has been posted by: <strong><? echo $row->name?></strong> on 
				<strong><? echo date("F j, Y", strtotime($row->date))?></strong>
				<?php
				if($type == 10){
				 echo anchor('admin/entry_delete/'.$row->id,'<img src="" />',array('id'=>'removeItem'));
				}
				?>
			</h5>
		</div>
		<div class="clear"></div>
		<div class="box_panel blog_post">
			<? echo $row->post?>
			<div class="clear"></div>
		</div>
		
		<div class='comment_box'>
			<?
			echo anchor('blog/comment_view/'.$row->id, 'View / Add Comments');
			if($type == 10){
				echo "|| ".anchor('admin/entry_delete/'.$row->id, 'Delete Entry', array('class' => 'entrynum_delete'));
			}
			?>
			<span class="num_comments">
				Number of comments: 
				<?php 
					$q = $this->Comments->get_approved($row->id);
					echo $q->num_rows;
				?>
			</span>
		</div>
	</div>
	<?php endforeach; ?>
	
</div>