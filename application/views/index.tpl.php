<?php echo doctype(); ?>
<html>
	<head>
		<title><?php echo $title; ?></title>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
		
		<?php echo css('grid/960.css'); ?>
		<?php echo css('grid/reset.css'); ?>
		<?php echo css('markitup/jHtmlArea.css'); ?>
		<?php echo css('general.css'); ?>
		
		<?php echo js('cufon.js'); ?>
		<?php echo js('Eurostile_400.font.js'); ?>
		<?php echo js('jquery.innerfade.js'); ?>
		<?php echo js('jquery.url.packed.js'); ?>
		<?php echo js('markitup/jquery.htmlarea.min.js'); ?>
		<?php echo js('jquery.all.js'); ?>
		
	</head>
	
	<body>
		<div class="container_12">
			<?php $this->load->view($header); ?>
			<?php $this->load->view($page); ?>
			<?php $this->load->view('shared/general_footer.php'); ?>
		</div>
		
		<!-- ******* GOOGLE ANALYTICS ******** -->
		<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
			try {
			var pageTracker = _gat._getTracker("UA-12112199-3");
			pageTracker._trackPageview();
			} catch(err) {}
		</script>
	</body>
</html>
