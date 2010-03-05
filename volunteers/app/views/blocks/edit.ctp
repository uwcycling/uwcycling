<div class="blocks form">
<?php echo $this->Form->create('Block');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Block', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('location');
		echo $this->Form->input('starts_at');
		echo $this->Form->input('ends_at');
		echo $this->Form->input('volunteer_limit');
		echo $this->Form->input('volunteer_count');
		echo $this->Form->input('Volunteer');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Block.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Block.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Blocks', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Volunteers', true)), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Volunteer', true)), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
	</ul>
</div>