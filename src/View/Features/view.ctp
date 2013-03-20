<div class="features view">
<h2><?php  echo __('Feature'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($feature['Feature']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Piece'); ?></dt>
		<dd>
			<?php echo $this->Html->link($feature['Piece']['piece_name'], array('controller' => 'pieces', 'action' => 'view', $feature['Piece']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Feature Name'); ?></dt>
		<dd>
			<?php echo h($feature['Feature']['feature_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Feature Value'); ?></dt>
		<dd>
			<?php echo h($feature['Feature']['feature_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Delete'); ?></dt>
		<dd>
			<?php echo h($feature['Feature']['is_delete']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Feature'), array('action' => 'edit', $feature['Feature']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Feature'), array('action' => 'delete', $feature['Feature']['id']), null, __('Are you sure you want to delete # %s?', $feature['Feature']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Features'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pieces'), array('controller' => 'pieces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Piece'), array('controller' => 'pieces', 'action' => 'add')); ?> </li>
	</ul>
</div>
