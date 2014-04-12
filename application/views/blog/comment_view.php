<?php $user = $this->session->userdata('user_info'); ?>
<div class="com_wrap grid_12">
	<div class="grid_padding">
	    <?php
	    echo anchor('blog/', 'Back To Blogs', array("id"=>"back_float"));
	    $row = $blogs->row();
	    ?>
	</div>
	<div class="clear"></div>
    <div class="grid_padding box_panel">
        <div class="title_wrap">
            <h3>
                <? echo  $row->title?>
            </h3>
            <h5>
            	This has been posted by: 
				<strong>
                    <? echo  $row->name?>
                </strong>on 
				<strong>
                    <? echo  date("F j, Y", strtotime($row->date))?>
                </strong>
			</h5>
			<div class="clear"></div>
        </div>
        <p>
            <? echo  $row->post?>
        </p>
    </div>
	<hr>
	<div class="box_panel">
    <h3 class="comment_h3">Comments</h3>
    <?php
    if ($comments->num_rows() > 0) {
    	
   		foreach ($comments->result() as $rows):
            
    ?>
	    <div class='comment_box <? echo $rows->type?>'>
	        <?php echo img_asset('blog/person.png'); ?>
			<h5>
	            <? echo  $rows->username?>
				<em>
					on <? echo  date("F j, Y", strtotime($rows->date))?> at <? echo  date("h:i A", strtotime($rows->date))?>
				</em>
				posted...
	        </h5>
			
	        <div class="clear"></div>
	        <p class="cpanel" style="margin-top: 10px;">
	        	<span>&nbsp</span>
	            <? echo  $rows->comment?>
	        </p>
	        <p class="date_box">
	            
	        </p>
	    </div>
    <?php
    	endforeach;
    }
    else {
        
    ?>
	</div>
    <div class='comment_box empty_comments'>
        <p class='cpanel'>
        	<span>&nbsp</span>
            At the moment, no entries/comments have been approved or have been posted yet. 
            Interested in making a comment? To make a comment please fill the form out 
            below and wait for it's approval.
        </p>
    </div>
    <?
    }
    ?>
    <div id="add_comment">
    	<div class="box_panel">
        	<h3 class="comment_h3">Add An Entry</h3>
		</div>
		<div class="grid_padding">
	        <?
	        // form for adding entries
	        echo form_open("blog/comment_add/$row->id");
			
			// This checks the level of the admin.
	        if($this->session->userdata('user') == "true")
			{	    
	            if ($user['type'] <= 5) {
	                $comment_type = "admin";
	            } else {
	                $comment_type = "user";
	            }
	            
	            $list = array(
					"Comment Here ".$user['name'], 
					form_hidden('username', $user['name']), 
					form_hidden('blog_id', $row->id), 
					form_hidden('type', $comment_type), 
					form_textarea(array('name'=>'comments')), 
					form_submit('entry_submit', 'Add Comment'));
	        } else {
	            $list = array(
					form_label("Name: ", "username").form_input(array('name'=>'username')), 
					form_hidden('blog_id', $row->id), form_label("Entry: ", "comments"), 
					form_textarea(array('name'=>'comments')), form_submit('entry_submit', 'Add Comment'));
	        }
	        echo ul($list, array('id'=>'entry_add'));
	        echo form_close();
	        ?>
		</div>
    </div>
</div>
<!-- End Wrap -->
