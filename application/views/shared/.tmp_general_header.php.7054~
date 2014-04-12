<div id="header">
	<div class="grid_12">
		<?php echo img_asset('sb_logo.png'); ?>
	</div>
	<div class="grid_12">
		<div class="box_border top_menu">
			<ul class="main_nav">
				<li><?php echo anchor('home/','Home'); ?></li>
	    		<li><?php echo anchor('lab/lab_index','The Lab'); ?>
					<ul class="subnav">
	                    <li><?php echo anchor('lab/products','Lab Products'); ?></li>
	                    <li><?php echo anchor('lab/lab_pro','Pro Customers'); ?></li>
	                    <li><?php echo anchor('lab/lab_catalog','Pro Catalog'); ?></li>
						<div class="clear"></div>
					</ul>
	            </li>
				<li><?php echo anchor('blog/index','The Blog'); ?></li>
				<li><?php echo anchor('school/schedule','The Photography School'); ?></li>
				<li><?php echo anchor('services/photoreflect','The Services'); ?></li>
				<li><?php echo anchor('photobook/book_download','Photobooks / Calendars'); ?>
					<ul class="subnav">
	                    <li><?php echo anchor('photobook/book_download','Photobook Downloads'); ?></li>
	                    <li><?php echo anchor('photobook/book_price','Photobook Pricing'); ?></li>
	                    <li><?php echo anchor('photobook/calendar_download','Calendar Downloads'); ?></li>
						<li><?php echo anchor('photobook/calendar_price','Calendar Pricing'); ?></li>
						<div class="clear"></div>
	            	</ul>
				</li>
				<li><?php echo anchor('downloads/','Downloads'); ?>
				<li class="nav_last"><?php echo anchor('about/company','About Us'); ?>
	                <ul class="subnav"> 
					    <li><?php echo anchor('about/company','About the Company'); ?></li>
	                    <li><?php echo anchor('about/contact','Contact Information'); ?></li>
	                    <li><?php echo anchor('about/career','Careers With Us'); ?></li>
						<div class="clear"></div>
					</ul>
				</li>	
			</ul>			
			<div class="clear"></div>
		</div>
	</div>
</div>
<script type="text/javascript">
	
$(function(){
		
		$(".main_nav > *").addClass('headlink');
	
		// IE Fix For Navigation
		if($.browser.msie){
			// ******* THIS IS THE CSS FIXES FOR [.subnav] ********
			$("ul.subnav").css({
				"margin-left":"-172px",
				"margin-top":"25px",
				"z-index":"100"
			});	
			
			$("ul.subnav:first").css({
				"margin-left":"-72px",
				"margin-top":"25px"
			});
			
			$("ul.subnav:last").css({
				"margin-left":"-76px",
				"margin-top":"25px"
			});
									
		}
		else{
			$('li.headlink').hover(
				function(){$('ul', this).show();},
				function(){$('ul', this).hide();}
			);
		}

	});

</script>
