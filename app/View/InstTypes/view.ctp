<div class="instTypes view">
<h2><?php echo __('Inst Type'); ?></h2>
	<dl>
		<dt><?php echo __('Inst Type'); ?></dt>
		<dd>
			<?php echo h($instType['InstType']['inst_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($instType['InstType']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inst Type'), array('action' => 'edit', $instType['InstType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Inst Type'), array('action' => 'delete', $instType['InstType']['id']), array(), __('Are you sure you want to delete # %s?', $instType['InstType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inst Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inst Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
