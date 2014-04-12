<div class="content_wrap dl_wrap">
	<div class="grid_12 grid_padding dl_head">
		<h3>Downloads</h3>
		Get our <strong class="pbook">FREE photobooks or calendars, cards, and posters software by 
		<?php echo anchor('photobook/book_download','Clicking Here'); ?></strong>.
		Also check out the rest of our software! If your a pro customer get our pro software as well! 
		We know that you'll love it because it is simple and easy-to-use! Plus it is free! Why 
		wait, get started today! 
	</div>
	
	<div class="grid_12 box_panel dl_box">
		<ul>
			<li>
				<?php echo img_asset('dl_thumbs/pc_thumb.png'); ?>
			</li>
			<li>
				<h3>Photo Center</h3>
				<p>
					<strong>Photo Center</strong> is the easiest way to print your pictures through 
					Shutterbug. This easy to use software allows you to enhance, crop and add graphics 
					to your pictures from the comfort of your house.
				</p>
				<p>
					When Asked, Our Lab Number is: <strong>1472</strong>.
				</p>
			</li>
			<li class="dl_last">
				<p>
					<?php echo anchor('http://www.expresshelpcenter.com/updates/photocenterhome/Latest/SetupPhotoCenter1300.exe', img_asset('dl_btn.png')); ?>
				</p>
			</li>
		</ul>
	</div>
	<div class="grid_12 box_panel dl_box">
		<ul>
			<li>
				<?php echo img_asset('dl_thumbs/roes_thumb.png'); ?>
			</li>
			<li>
				<h3>ROES</h3>
				<p>
					The ROES Client is a Java-based application that runs on Windows, Linux, 
					and Mac OS X. It offers the user the ability to select a lab defined product 
					and precisely define crops and rotations on their images within that product.
				</p>
			</li>
			<li class="dl_last">
				<p>
					<?php echo anchor('http://www.softworksroes.com/ROES/labs/ShutterBug', img_asset('dl_btn.png')); ?>
				</p>
			</li>
		</ul>
	</div>
	<div class="clear"></div>
	
	<div align="center" class="pro_click">
		<a alt="pro_downloads" href='#'><h3>Are You A Pro Customer? Click Here To Access your Downloads!</h3></a>
	</div>
	
	<div id="pro_downloads" style="display:none;">
		<div class="grid_12 box_panel dl_box">
			<ul>
				<li>
					<?php echo img_asset('dl_thumbs/droom_thumb.png'); ?>
				</li>
				<li>
					<h3>Darkroom Web Edition</h3>
					<p>
						Start taking advantage of the many products and services we offer. With 
						Darkroom you can also use Photoreflect, this service allows you to sell 
						your pictures online in an easy, worry free manner. 
					</p>
				</li>
				<li class="dl_last">
					<p>
						<?php echo anchor('http://www.expressdigital.com/support/downloads/DRWE/WebFull/SetupDRWE1612.exe', img_asset('dl_btn.png')); ?>
					</p>
				</li>
			</ul>
		</div>
	</div>
</div>


<script type="text/javascript">
	$(function(){
		$("a[alt='pro_downloads']").click(function(e){
			e.preventDefault();
			$("#pro_downloads").slideToggle();
		});
	});
</script>
