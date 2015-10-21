<div class="raTypes view">
<h2><?php echo __('Ra Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($raType['RaType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ra Type'); ?></dt>
		<dd>
			<?php echo h($raType['RaType']['ra_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($raType['RaType']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ra Type'), array('action' => 'edit', $raType['RaType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ra Type'), array('action' => 'delete', $raType['RaType']['id']), array(), __('Are you sure you want to delete # %s?', $raType['RaType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ra Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ra Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
