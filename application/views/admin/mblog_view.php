<?php $user = $this->session->userdata('user_info'); ?>
<div class="grid_12 content_wrap admin_wrap">
	<div class="box_panel admin_head">
		<h3>Blog Management</h3>
		<p><?php echo anchor('admin/admin_panel','Back To Admin Panel'); ?></p>
		<div class="clear"></div>
	</div>
	<div class="box_panel">
		<div class="entry_panel view_entry">
		<h3>View / Remove Entries</h3>
		<?php foreach($blogs->result() as $row): ?>
			<table>
				<tr>
					<th style="width: 300px;"><strong><?php echo $row->id.' | '.$row->title; ?></strong></th>
					<td<?php echo anchor('blog/comment_view/'.$row->id,'View Blog Entry'); ?></td>
					<td><?php echo anchor('admin/entry_remove/'.$row->id,'Delete Blog'); ?></td>
				</tr>
			</table>
		<?php endforeach; ?>
		</div>
		<div class="entry_panel add_entry">
			<h3>Add An Entry</h3>
			<div class="add_box">
			<?php 
				$data = array(
	              'name'        => 'post',
	              'class'       => 'markitup',
	            );
				echo form_open('admin/entry_add', array('class'=>'entry_form'));
				echo form_label('Title of Blog: ','title').form_input('title');
				echo br();
				echo form_textarea($data).br();
				echo form_submit('mySubmit','Submit Blog Entry');
				echo form_close();
			?>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		$(".markitup").htmlarea();
		$(".entry_form").submit(function(){
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>index.php/admin/entry_add",
				data: $(".entry_form").serialize(),
				success: function(msg){
					$(".add_box").html(msg);
				}
			});
			
			return false;
		});
	});
</script>
