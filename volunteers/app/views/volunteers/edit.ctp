<div class="volunteers form">
<?php echo $this->Form->create('Volunteer');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Volunteer', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
	?>
	</fieldset>
	<div class="submit">
<?php echo $this->Form->submit('Edit', array('div'=>false)).
		' or '.$this->Html->link('Delete Volunteer', array('action'=>'delete', $this->data['Volunteer']['id']));?>
	</div>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Volunteer.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Volunteer.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Volunteers', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Blocks', true)), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Block', true)), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
	</ul>
</div>