<div class="manufacturers view">
<h2><?php  echo __('Manufacturer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($manufacturer['Manufacturer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Manufacturer Name'); ?></dt>
		<dd>
			<?php echo h($manufacturer['Manufacturer']['manufacturer_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Manufacturer Description'); ?></dt>
		<dd>
			<?php echo h($manufacturer['Manufacturer']['manufacturer_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Delete'); ?></dt>
		<dd>
			<?php echo h($manufacturer['Manufacturer']['is_delete']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Manufacturer'), array('action' => 'edit', $manufacturer['Manufacturer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Manufacturer'), array('action' => 'delete', $manufacturer['Manufacturer']['id']), null, __('Are you sure you want to delete # %s?', $manufacturer['Manufacturer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Manufacturers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manufacturer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pieces'), array('controller' => 'pieces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Piece'), array('controller' => 'pieces', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Pieces'); ?></h3>
	<?php if (!empty($manufacturer['Piece'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Manufacturer Id'); ?></th>
		<th><?php echo __('Piece Name'); ?></th>
		<th><?php echo __('Model'); ?></th>
		<th><?php echo __('Is Internal Piece'); ?></th>
		<th><?php echo __('Piece Description'); ?></th>
		<th><?php echo __('Is Delete'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($manufacturer['Piece'] as $piece): ?>
		<tr>
			<td><?php echo $piece['id']; ?></td>
			<td><?php echo $piece['manufacturer_id']; ?></td>
			<td><?php echo $piece['piece_name']; ?></td>
			<td><?php echo $piece['model']; ?></td>
			<td><?php echo $piece['is_internal_piece']; ?></td>
			<td><?php echo $piece['piece_description']; ?></td>
			<td><?php echo $piece['is_delete']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pieces', 'action' => 'view', $piece['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pieces', 'action' => 'edit', $piece['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pieces', 'action' => 'delete', $piece['id']), null, __('Are you sure you want to delete # %s?', $piece['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Piece'), array('controller' => 'pieces', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
