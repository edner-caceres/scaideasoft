<div class="items view">
<h2><?php  echo __('Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($item['ParentItem']['serial_number'], array('controller' => 'items', 'action' => 'view', $item['ParentItem']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($item['Status']['name_status'], array('controller' => 'statuses', 'action' => 'view', $item['Status']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Equipment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($item['Equipment']['name_equipment'], array('controller' => 'equipment', 'action' => 'view', $item['Equipment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Piece'); ?></dt>
		<dd>
			<?php echo $this->Html->link($item['Piece']['piece_name'], array('controller' => 'pieces', 'action' => 'view', $item['Piece']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serial Number'); ?></dt>
		<dd>
			<?php echo h($item['Item']['serial_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($item['Item']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($item['Item']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Delete'); ?></dt>
		<dd>
			<?php echo h($item['Item']['is_delete']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item'), array('action' => 'delete', $item['Item']['id']), null, __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipment'), array('controller' => 'equipment', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipment'), array('controller' => 'equipment', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pieces'), array('controller' => 'pieces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Piece'), array('controller' => 'pieces', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Items'); ?></h3>
	<?php if (!empty($item['ChildItem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Equipment Id'); ?></th>
		<th><?php echo __('Piece Id'); ?></th>
		<th><?php echo __('Serial Number'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Is Delete'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($item['ChildItem'] as $childItem): ?>
		<tr>
			<td><?php echo $childItem['id']; ?></td>
			<td><?php echo $childItem['item_id']; ?></td>
			<td><?php echo $childItem['status_id']; ?></td>
			<td><?php echo $childItem['equipment_id']; ?></td>
			<td><?php echo $childItem['piece_id']; ?></td>
			<td><?php echo $childItem['serial_number']; ?></td>
			<td><?php echo $childItem['start_date']; ?></td>
			<td><?php echo $childItem['end_date']; ?></td>
			<td><?php echo $childItem['is_delete']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'items', 'action' => 'view', $childItem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'items', 'action' => 'edit', $childItem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items', 'action' => 'delete', $childItem['id']), null, __('Are you sure you want to delete # %s?', $childItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
