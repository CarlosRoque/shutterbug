<div class="content_wrap admin_wrap">
	<div align="center" class="grid_12 box_panel">
		<h3>Admin Panel Login</h3>
		<?php if($this->session->flashdata('login_fail')){ ?>
		
		<div class="grid_12 bad_login">
			<p>
				Your login attempt was not successful. Please check your credentials
				and try logging in again. Thank You.
			</p>
		</div>
						
		<?php } echo form_open('admin/check_log'); ?>
		<ul>
			<li><?php echo form_label('Username: ','user').form_input('user'); ?></li>
			<li><?php echo form_label('Password: ','pass').form_password('pass'); ?></li>
			<li><?php echo form_label('').form_submit('mySubmit','Login'); ?></li>
		</ul>
		<?php echo form_close(); ?>
	</div>
</div>
