<?
	$this->load->view('admin_js.php');
?>

<div class="container_12">
<div id="admin_wrap">
	<div class="grid_4">
		<h3>General Features</h3>
		<ul class="panel_box">
			<li class="open_a"><a href="addauser_box">Add A User</a></li>
			<li class="open_a"><a href="addaentry_box">Add A Blog</a></li>
			<li class="open_a"><a href="manage_comments">Approve Comments</a>
			<li><?=anchor('blog', 'View Articles');?></li>
			<li><?=anchor('blog/logout', 'Logout Of Here', array("class"=>"admin_last"));?></a></li>
		</ul>
	</div>
	<div class="grid_6">
		<div id="addauser_box" class="admin_pad">
			<h3>Add A User</h3>
			<?
				// options for user type
				$options = array("1"=>"User","5"=>"Moderator","10"=>"Admin");
				
				// form for adding users
				echo form_open('admin/user_add', array('id'=>'adduser'));
				$list = array(
							form_label("Username ","user").form_input(array('name' => 'user')),
							form_label("Password ","pass").form_input(array('name' => 'pass')),
							form_label("Level ","level").form_dropdown('level', $options, '10'),
							form_label("Name ","name").form_input(array('name' => 'name')),
							form_label("Email ","email").form_input(array('name' => 'email')),
							form_submit('user_submit', 'Add User')
				);
				echo ul($list, array('class'=>'admin_lab'));
				echo form_close();
			?>
		</div>
		<div id="addaentry_box" class="admin_pad">
			<h3>Add An Entry</h3>
			<?
				// form for adding entries
				echo form_open('admin/entry_add', array('id'=>'addentry'));
				$list = array(
							form_label("Title ", "title").form_input(array('name' => 'title')),
							form_label("Entry ", "post"),
							form_textarea(array('name' => 'post', 'rows' => '10', 'cols' => '40', 'id' => 'crazyblog_entry')),
							form_submit('entry_submit', 'Add Post')
				);
				echo ul($list, array('class'=>'admin_lab'));
				echo form_close();
			?>
		</div>
		<div id="manage_comments" class="admin_pad">
			<h3>Comments to Approve</h3>
			<?
				// comments that need approving
				foreach($queued->result() as $row):
			?>
			<div class="comment_queue">
				<div class="comment_head">
				<h5><?=$row->username;?> (<?=$row->date;?>) 
				<?
				echo anchor('blog/comment_view/'.$row->blog_id,'Blog ID #'.$row->blog_id);
				?>
				<!-- || <span><?=anchor('#','View/Hide', array('class' => 'view_com+'));?></span></h5> -->
				</div>
				<div class="comment_floats">
					<div class="queue_left" style="display: block;">
						<?=$row->comment;?>
					</div>
					<div class="queue_right">
						<p>
						<?
							echo anchor('admin/comment_approve/'.$row->id,'Approve Comment', array('class' => 'approve'));
							echo "</p><p>";
							echo anchor('admin/comment_delete/'.$row->id,'Delete Comment', array('class' => 'delete'));
						?>
						</p>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<?		
				endforeach;
			?>
		</div>
	</div><!-- Ends Grid -->
</div><!-- Ends Wrap -->
</div><!-- Ends Container -->