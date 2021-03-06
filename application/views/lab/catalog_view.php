<div class="content_wrap">
	<?php $this->load->view('lab/shared/lab_tab.php'); ?>
	<div class="grid_12 box_panel">
		<?php echo form_open('lab/catalog_process', array('class'=>'cat_form')); ?>
		<ul id="form_address">
			<h3>Address Information</h3>
			<li><?php echo form_label('Name ','name').form_input('name'); ?></li>
			<li><?php echo form_label('Company ','company').form_input('company'); ?></li>
			<li><?php echo form_label('Address ','address').form_input('address'); ?></li>
			<li><?php echo form_label('City ','city').form_input('city'); ?></li>
			<li><?php echo form_label('State ','state').form_input('state'); ?></li>
			<li><?php echo form_label('Zip ','zip').form_input('zip'); ?></li>
			<li><?php echo form_label('Phone ','phone').form_input('phone'); ?></li>
			<li><?php echo form_label('Email ','email').form_input('email'); ?></li>
		</ul>
		<ul id="form_questions">
			<h3>Mandatory Questions</h3>
			<p style="font-size: .8em;">
				(We require this information to determine the professional status of the catalog requests we receive - thank you for your cooperation!)
			</p>
			<li>
				<?php 
				echo form_label('Are You Digital? ','digital')
				."Yes".form_radio('digital','yes')
				."No".form_radio('digital','no')
				?>
			</li>
			<li><?php echo form_label('How many kids do you photograph a year? ','q1').form_input('q1'); ?></li>
			<li><?php echo form_label('How many action tournaments do you do per year? ','q2').form_input('q2'); ?></li>
			<li><?php echo form_label('How many employees do you have?','q3').form_input('q3'); ?></li>
			<li><?php echo form_label('How long have you been doing business?','q4').form_input('q4'); ?></li>
			<li><?php echo form_label('What is your photography website?','q5').form_input('q5'); ?></li>
			<li><?php echo form_label('What photography association(s) are you a member of?','q6').form_input('q6'); ?></li>
			<li>
				<?php 
					$options = array(
	                  'Youth Sports'  => 'Youth Sports',
	                  'Events'    => 'Events',
	                  'Studio'   => 'Studio',
	                  'Portraits' => 'Portraits',
					  'Commercial'  => 'Commercial',
	                  'Weddings'    => 'Weddings',
	                  'Aerial'   => 'Aerial',
	                  'School' => 'School'
	                );
					echo form_label('What kind of photography do you offer? Check all that apply:','q7').form_multiselect('q7', $options); 
				?>
			</li>
			<li>
				<?php 
				echo form_label('Are you a current client with Eventphotomarket.com? ','client')
				."Yes".form_radio('client','yes')
				."No".form_radio('client','no')
				?>
			</li>
			<li><?php echo form_label('----- Additional Comments ----- ','comments').form_textarea('comments'); ?></li>
			<li><?php echo form_submit('mySubmit','Submit Request'); ?></li>
		</ul>
		<?php echo form_close(); ?>
	</div>
</div>
