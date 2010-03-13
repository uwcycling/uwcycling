<div class="volunteers form">
<?php echo $this->Form->create('Volunteer');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Volunteer', true)); ?></legend>
	<?php
		echo $this->Form->input('block_id');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('badge');
		echo $this->Form->input('verified');
		echo $this->Form->input('admin');
		echo $this->Form->input('deleted');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Volunteers', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Blocks', true)), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Block', true)), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
	</ul>
</div>