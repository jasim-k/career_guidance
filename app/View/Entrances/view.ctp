<div class="entrances view">
<h2><?php echo __('Entrance'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entrance['Entrance']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entrance'); ?></dt>
		<dd>
			<?php echo h($entrance['Entrance']['entrance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($entrance['Entrance']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entrance'), array('action' => 'edit', $entrance['Entrance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Entrance'), array('action' => 'delete', $entrance['Entrance']['id']), array(), __('Are you sure you want to delete # %s?', $entrance['Entrance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entrances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entrance'), array('action' => 'add')); ?> </li>
	</ul>
</div>
