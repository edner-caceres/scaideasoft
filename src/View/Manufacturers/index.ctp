<div class="manufacturers index">
	<h2><?php echo __('Manufacturers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('manufacturer_name'); ?></th>
			<th><?php echo $this->Paginator->sort('manufacturer_description'); ?></th>
			<th><?php echo $this->Paginator->sort('is_delete'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($manufacturers as $manufacturer): ?>
	<tr>
		<td><?php echo h($manufacturer['Manufacturer']['id']); ?>&nbsp;</td>
		<td><?php echo h($manufacturer['Manufacturer']['manufacturer_name']); ?>&nbsp;</td>
		<td><?php echo h($manufacturer['Manufacturer']['manufacturer_description']); ?>&nbsp;</td>
		<td><?php echo h($manufacturer['Manufacturer']['is_delete']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $manufacturer['Manufacturer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $manufacturer['Manufacturer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $manufacturer['Manufacturer']['id']), null, __('Are you sure you want to delete # %s?', $manufacturer['Manufacturer']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Manufacturer'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pieces'), array('controller' => 'pieces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Piece'), array('controller' => 'pieces', 'action' => 'add')); ?> </li>
	</ul>
</div>
