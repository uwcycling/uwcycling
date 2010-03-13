<div class="section blocks index grid_16">
	<?php
	foreach ($blocks as $block):
	?>
	<h2><?php echo $this->Time->format(
		'l, F jS',
		$this->Time->fromString($block['Block']['starts_at'])); ?></h2>
	<div class="grid_4 alpha">
		<h3><?php echo $block['Block']['title']?></h3>
		<p class="time">
			<?php
			$format = 'g:m A'; 
			echo $this->Time->format(
				$format, $block['Block']['starts_at']
			);
			echo " &ndash; ";
			echo $this->Time->format(
				$format, $block['Block']['ends_at']
			);
			?>
		<p class="location"><?php echo $block['Block']['location']?></p>
		<p class="description"><?php echo $block['Block']['description']?></p>
	</div>
	<div class="grid_12 omega">
		<p class="volunteer-signup">
			<?php 
			echo $html->link('Volunteer!', array(
				'controller'=>'volunteers', 
				'action'=>'signup', 
				'for'=>$block['Block']['id']
				)
			);
			?>
		</p>
		<p class="status">
			<span class="count">
				<?php echo $block['Block']['volunteer_count']; ?>
			</span>
			of 
			<span class="limit">
				<?php echo $block['Block']['volunteer_limit']; ?>
			</span>
		</p>
	</div>
	<?php endforeach; ?>
</div>	