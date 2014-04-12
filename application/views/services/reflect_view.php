<div class="content_wrap service_wrap">
	<?php $this->load->view('services/shared/service_tab.php'); ?>
	<div class="clear"></div>
	
	<div class="grid_12 grid_padding">
		<p>
			Find your pictures, purchase prints and gifts, and more through our photoreflect 
			service. This service is available 24/7 to you. We also let one of our professionals 
			handle the printing and the shipping both here at Shutterbug Photo Mall. Click on the
			image below to look for your picture!
		</p>
	</div>
	<div class="grid_12" align="center">
		<?php echo anchor('#', img_asset('reflect.gif'), array('id'=>'photo_open')); ?>
	</div>
	<div class="grid_12 box_panel">
		<iframe id="photoreflect" src ="http://www.photoreflect.com/PR3/store.aspx?p=38725" width="100%" height="500">
		  <p>Your browser does not support iframes.</p>
		</iframe>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		$("#photoreflect").hide();
		
		$("#photo_open").click(function(e){
			e.preventDefault();
			
			$("#photoreflect").slideToggle();
		});
	});
</script>