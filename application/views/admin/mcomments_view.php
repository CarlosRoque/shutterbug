<?php $user = $this->session->userdata('user_info'); ?>
<div class="grid_12 content_wrap admin_wrap">
	<div class="box_panel admin_head">
		<h3>Comments Management</h3>
		<p><?php echo anchor('admin/admin_panel','Back To Admin Panel'); ?></p>
		<div class="clear"></div>
	</div>
	<div class="box_panel">
		<div class="entry_panel view_entry">
		<h3>View / Remove Entries</h3>
		<?php foreach($comments->result() as $row): ?>
			<table>
				<tr>
					<th style="width: 600px;">
						<strong><?php echo $row->id.' | '.$row->username.' on '.date("F j, Y", strtotime($row->date)); ?></strong>
					</th>
					<td<?php echo anchor('admin/comments_approve/'.$row->id,'Approve Comment'); ?></td>
					<td><?php echo anchor('admin/comments_remove/'.$row->id,'Delete Comment'); ?></td>
				</tr>
				<tr>
					<td colspan='3'>
						<?php echo $row->comment; ?>
					</td>
				</tr>
			</table>
		<?php endforeach; ?>
		</div>
	</div>
</div>