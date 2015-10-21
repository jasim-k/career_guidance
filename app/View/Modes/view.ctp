<div class="modes view">
<h2><?php echo __('Mode'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mode['Mode']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mode Study'); ?></dt>
		<dd>
			<?php echo h($mode['Mode']['mode_study']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($mode['Mode']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mode'), array('action' => 'edit', $mode['Mode']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mode'), array('action' => 'delete', $mode['Mode']['id']), array(), __('Are you sure you want to delete # %s?', $mode['Mode']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Modes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mode'), array('action' => 'add')); ?> </li>
	</ul>
</div>
