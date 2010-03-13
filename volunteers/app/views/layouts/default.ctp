<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title_for_layout; ?></title>
		<?php
			echo $html->css(array('uw.volunteer'));
		?>
	</head>
	<body>
		<div class="section container_16">
			<div class="header grid_16">
				<h1>Collegiate Cycling Nationals 2010</h1>
				<p class="tagline">Volunteer Signup</p>
			</div>
			<?php echo $content_for_layout; ?>
			<div class="footer grid_16">
				<p>Brought to you by <?php echo $html->link('UW Cycling', 'http://www.uwcycling.com'); ?></p>
			</div>
		</div>
	</body>	
</html>