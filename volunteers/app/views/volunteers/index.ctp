<div class="volunteers index">
	<h2><?php __('Volunteers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('badge');?></th>
			<th><?php echo $this->Paginator->sort('verified');?></th>
			<th><?php echo $this->Paginator->sort('deleted');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($volunteers as $volunteer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $volunteer['Volunteer']['id']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['name']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['email']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['badge']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['verified']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['deleted']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $volunteer['Volunteer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $volunteer['Volunteer']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $volunteer['Volunteer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $volunteer['Volunteer']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Volunteer', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Blocks', true)), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Block', true)), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
	</ul>
</div>