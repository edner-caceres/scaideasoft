<div class="pieces view">
<h2><?php  echo __('Piece'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($piece['Piece']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Manufacturer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($piece['Manufacturer']['manufacturer_name'], array('controller' => 'manufacturers', 'action' => 'view', $piece['Manufacturer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Piece Name'); ?></dt>
		<dd>
			<?php echo h($piece['Piece']['piece_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($piece['Piece']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Internal Piece'); ?></dt>
		<dd>
			<?php echo h($piece['Piece']['is_internal_piece']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Piece Description'); ?></dt>
		<dd>
			<?php echo h($piece['Piece']['piece_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Delete'); ?></dt>
		<dd>
			<?php echo h($piece['Piece']['is_delete']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Piece'), array('action' => 'edit', $piece['Piece']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Piece'), array('action' => 'delete', $piece['Piece']['id']), null, __('Are you sure you want to delete # %s?', $piece['Piece']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pieces'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Piece'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Manufacturers'), array('controller' => 'manufacturers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manufacturer'), array('controller' => 'manufacturers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Features'), array('controller' => 'features', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Features'); ?></h3>
	<?php if (!empty($piece['Feature'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Piece Id'); ?></th>
		<th><?php echo __('Feature Name'); ?></th>
		<th><?php echo __('Feature Value'); ?></th>
		<th><?php echo __('Is Delete'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($piece['Feature'] as $feature): ?>
		<tr>
			<td><?php echo $feature['id']; ?></td>
			<td><?php echo $feature['piece_id']; ?></td>
			<td><?php echo $feature['feature_name']; ?></td>
			<td><?php echo $feature['feature_value']; ?></td>
			<td><?php echo $feature['is_delete']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'features', 'action' => 'view', $feature['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'features', 'action' => 'edit', $feature['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'features', 'action' => 'delete', $feature['id']), null, __('Are you sure you want to delete # %s?', $feature['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Items'); ?></h3>
	<?php if (!empty($piece['Item'])): ?>
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
		foreach ($piece['Item'] as $item): ?>
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
