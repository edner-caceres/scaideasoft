<div class="pieces index">
	<h2><?php echo __('Pieces'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('manufacturer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('piece_name'); ?></th>
			<th><?php echo $this->Paginator->sort('model'); ?></th>
			<th><?php echo $this->Paginator->sort('is_internal_piece'); ?></th>
			<th><?php echo $this->Paginator->sort('piece_description'); ?></th>
			<th><?php echo $this->Paginator->sort('is_delete'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($pieces as $piece): ?>
	<tr>
		<td><?php echo h($piece['Piece']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($piece['Manufacturer']['manufacturer_name'], array('controller' => 'manufacturers', 'action' => 'view', $piece['Manufacturer']['id'])); ?>
		</td>
		<td><?php echo h($piece['Piece']['piece_name']); ?>&nbsp;</td>
		<td><?php echo h($piece['Piece']['model']); ?>&nbsp;</td>
		<td><?php echo h($piece['Piece']['is_internal_piece']); ?>&nbsp;</td>
		<td><?php echo h($piece['Piece']['piece_description']); ?>&nbsp;</td>
		<td><?php echo h($piece['Piece']['is_delete']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $piece['Piece']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $piece['Piece']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $piece['Piece']['id']), null, __('Are you sure you want to delete # %s?', $piece['Piece']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Piece'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Manufacturers'), array('controller' => 'manufacturers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manufacturer'), array('controller' => 'manufacturers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Features'), array('controller' => 'features', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
