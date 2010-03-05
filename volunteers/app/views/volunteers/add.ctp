<div class="volunteers form">
<?php echo $this->Form->create('Volunteer');?>
	<fieldset>
 		<legend><?php printf(__('Become a %s', true), __('Volunteer', true)); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Register', true));?>
</div>