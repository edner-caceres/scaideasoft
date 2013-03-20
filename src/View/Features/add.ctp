<div class="features form">
<?php echo $this->Form->create('Feature'); ?>
	<fieldset>
		<legend><?php echo __('Add Feature'); ?></legend>
	<?php
		echo $this->Form->input('piece_id');
		echo $this->Form->input('feature_name');
		echo $this->Form->input('feature_value');
		echo $this->Form->input('is_delete');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Features'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pieces'), array('controller' => 'pieces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Piece'), array('controller' => 'pieces', 'action' => 'add')); ?> </li>
	</ul>
</div>
