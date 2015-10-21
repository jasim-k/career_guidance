<div class="caTypes view">
<h2><?php echo __('Ca Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($caType['CaType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ca Type'); ?></dt>
		<dd>
			<?php echo h($caType['CaType']['ca_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($caType['CaType']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ca Type'), array('action' => 'edit', $caType['CaType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ca Type'), array('action' => 'delete', $caType['CaType']['id']), array(), __('Are you sure you want to delete # %s?', $caType['CaType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ca Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ca Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
