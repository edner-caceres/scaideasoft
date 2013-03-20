<div class="equipment view">
<h2><?php  echo __('Equipment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($equipment['Equipment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($equipment['Status']['name_status'], array('controller' => 'statuses', 'action' => 'view', $equipment['Status']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($equipment['Category']['category_name'], array('controller' => 'categories', 'action' => 'view', $equipment['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nia'); ?></dt>
		<dd>
			<?php echo h($equipment['Equipment']['nia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($equipment['Equipment']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name Equipment'); ?></dt>
		<dd>
			<?php echo h($equipment['Equipment']['name_equipment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description Equipment'); ?></dt>
		<dd>
			<?php echo h($equipment['Equipment']['description_equipment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Delete'); ?></dt>
		<dd>
			<?php echo h($equipment['Equipment']['is_delete']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Equipment'), array('action' => 'edit', $equipment['Equipment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Equipment'), array('action' => 'delete', $equipment['Equipment']['id']), null, __('Are you sure you want to delete # %s?', $equipment['Equipment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipment'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Items'); ?></h3>
	<?php if (!empty($equipment['Item'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Item'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Equipment'); ?></th>
		<th><?php echo __('Piece'); ?></th>
		<th><?php echo __('Serial Number'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Is Delete'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($equipment['Item'] as $item): ?>
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['item_id']; ?></td>
			<td><?php echo $item['status_id']; ?></td>
			<td><?php echo $item['equipment_id']; ?></td>
			<td><?php echo $item['piece_id']; ?></td>
			<td><?php echo $item['serial_number']; ?></td>
			<td><?php echo $item['start_date']; ?></td>
			<td><?php echo $item['end_date']; ?></td>
			<td><?php echo $item['is_delete']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'items', 'action' => 'view', $item['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'items', 'action' => 'edit', $item['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items', 'action' => 'delete', $item['id']), null, __('Are you sure you want to delete # %s?', $item['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
