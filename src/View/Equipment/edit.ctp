<div class="equipment form">
<?php echo $this->Form->create('Equipment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Equipment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('status_id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('nia');
		echo $this->Form->input('code');
		echo $this->Form->input('name_equipment');
		echo $this->Form->input('description_equipment');
		echo $this->Form->input('is_delete');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Equipment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Equipment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Equipment'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
