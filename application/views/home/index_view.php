<div class="content_wrap">
	<div class="grid_12">
		<ul class="imagefade">
			<li><?php echo img_asset('header2.jpg'); ?></li>
			<li><?php echo img_asset('header3.jpg'); ?></li>
			<li><?php echo img_asset('header4.jpg'); ?></li>
		</ul>
		<div class="box_panel news">
			<p class="news_head">
				<?php echo img_asset('news_icon.png'); ?>
				<strong>Hot Site News &nbsp&nbsp&nbsp | </strong>
			</p>
			<ul class="news_fade">
				<li><?php echo anchor('http://www.myphotobooksite.com','MyPhotobookSite.com'); ?> Launched!</li>
				<li>Check out <?php echo anchor('http://www.roshanpress.com','Roshanpress.com'); ?>! Our digital print marketplace! Take a look now!</li>
				<li>250 Business Cards For Free</li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<div class="grid_4">
		<div class="box_panel home_box">
			<h3>Blog</h3>
			<p>
				<strong>The Shutterbug Photo Mall Blog</strong> - Visit our blog to get
				updated on everything we do and to talk one on one with the people here
				at Shutterbug Photo Mall.
			</p>
			<p>
				To visit the our blog <?php echo anchor('blog/','Go Here'); ?>.
			</p>
		</div>
	</div>
	<div class="grid_4">
		<div class="box_panel home_box">
			<h3>MyPhotobookSite!</h3>
			<p>
				<strong>MyPhotobookSite.com</strong> launched on December 21st making it the newest 
				site to The Roshan Group, Inc. line up of photo businesses. To view the new site 
				<?php echo anchor('http://www.myphotobooksite.com/','clicking here'); ?>
			</p>
			<p>
				Need an idea for photo books, calendars, or cards? We'll help give you a starting 
				point in creating your next project with our extensive list of idea's. 
				<?php echo anchor('http://www.myphotobooksite.com/ideas','Click here'); ?>
				to to see that list. 
			</p>
		</div>
	</div>
	<div class="grid_4">
		<div class="box_panel home_box">
			<h3>Poll of New Design</h3>
			<p>
				We thought, why not actually get some feedback from the people
				that come to visit our website. Take a moment if you would like
				and vote on your view of this new design. Also, send some feedback 
				 on your thoughts and your ideas. 
			</p>
			<div class="vote"><strong>Vote: </strong>
				<?php 
					echo anchor('#', 'Like', array('class' => 'left')).anchor('#','Dislike', array('class' => 'right')).br(2); 
				?>
			</div>
			
			<strong>Send some feedback by</strong> <?php echo safe_mailto('johnm@sbphotomall.com','Clicking Here'); ?>
			
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		$(".imagefade").innerfade({ 
			speed: 1000, 
			timeout: 10000, 
			type: 'sequence',
			containerheight: '345px'
		});
		
		$(".news_fade").innerfade({ 
			speed: 1000, 
			timeout: 5000, 
			type: 'sequence'
		});
		
		// This Relates to the Poll ( ajax stuff )
		$('.vote .left').click(function(e){
			e.preventDefault();
			
			$.ajax({
				url: "<?=base_url()?>index.php/home/poll/1",
				success: function(msg){
					
					// Outputs the message
					$(".vote").html("<div class='poll_msg'>"+msg+"</div>");
					
					// Outputs the Poll Results
					$('a.result_view').click(function(e){
						e.preventDefault();
						
						$.ajax({
							url: "<?=base_url()?>index.php/home/view_poll",
							success: function(msg){
								$(".vote").html("<div class='poll_view'>"+msg+"</div>");
							}
						});
			
					});
				// End Success For Ajax
				}
			});

		});
		
		$('.vote .right').click(function(e){
			e.preventDefault();
			
			$.ajax({
				url: "<?=base_url()?>index.php/home/poll/2",
				success: function(msg){
					
					// Outputs the message
					$(".vote").html("<div class='poll_msg'>"+msg+"</div>");
					
					// Outputs the Poll Results
					$('a.result_view').click(function(e){
						e.preventDefault();
						
						$.ajax({
							url: "<?=base_url()?>index.php/home/view_poll",
							success: function(msg){
								$(".vote").html("<div class='poll_view'>"+msg+"</div>");
							}
						});
			
					});	
				// End Success For Ajax
				}
			});
		});
		
		// This Relates to IE Fixes
		if ($.browser.msie) {
			$(".imagefade").css({
				"position":"relative",
				"z-index":"0"
			});
		}
	});
</script>
