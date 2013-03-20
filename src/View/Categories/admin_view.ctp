<div class="categories view">
<h2><?php  echo __('Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($category['ParentCategory']['category_name'], array('controller' => 'categories', 'action' => 'view', $category['ParentCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category Name'); ?></dt>
		<dd>
			<?php echo h($category['Category']['category_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category Description'); ?></dt>
		<dd>
			<?php echo h($category['Category']['category_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category Image'); ?></dt>
		<dd>
			<?php echo h($category['Category']['category_image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Delete'); ?></dt>
		<dd>
			<?php echo h($category['Category']['is_delete']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), null, __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipment'), array('controller' => 'equipment', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipment'), array('controller' => 'equipment', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Categories'); ?></h3>
	<?php if (!empty($category['ChildCategory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Category Name'); ?></th>
		<th><?php echo __('Category Description'); ?></th>
		<th><?php echo __('Category Image'); ?></th>
		<th><?php echo __('Is Delete'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($category['ChildCategory'] as $childCategory): ?>
		<tr>
			<td><?php echo $childCategory['id']; ?></td>
			<td><?php echo $childCategory['category_id']; ?></td>
			<td><?php echo $childCategory['category_name']; ?></td>
			<td><?php echo $childCategory['category_description']; ?></td>
			<td><?php echo $childCategory['category_image']; ?></td>
			<td><?php echo $childCategory['is_delete']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'categories', 'action' => 'view', $childCategory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'categories', 'action' => 'edit', $childCategory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'categories', 'action' => 'delete', $childCategory['id']), null, __('Are you sure you want to delete # %s?', $childCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Equipment'); ?></h3>
	<?php if (!empty($category['Equipment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Nia'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Name Equipment'); ?></th>
		<th><?php echo __('Description Equipment'); ?></th>
		<th><?php echo __('Is Delete'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($category['Equipment'] as $equipment): ?>
		<tr>
			<td><?php echo $equipment['id']; ?></td>
			<td><?php echo $equipment['status_id']; ?></td>
			<td><?php echo $equipment['category_id']; ?></td>
			<td><?php echo $equipment['nia']; ?></td>
			<td><?php echo $equipment['code']; ?></td>
			<td><?php echo $equipment['name_equipment']; ?></td>
			<td><?php echo $equipment['description_equipment']; ?></td>
			<td><?php echo $equipment['is_delete']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'equipment', 'action' => 'view', $equipment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'equipment', 'action' => 'edit', $equipment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'equipment', 'action' => 'delete', $equipment['id']), null, __('Are you sure you want to delete # %s?', $equipment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Equipment'), array('controller' => 'equipment', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
