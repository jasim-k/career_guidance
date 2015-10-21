<div class="eligibilities view">
<h2><?php echo __('Eligibility'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eligibility['Eligibility']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eligibility'); ?></dt>
		<dd>
			<?php echo h($eligibility['Eligibility']['eligibility']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($eligibility['Eligibility']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Eligibility'), array('action' => 'edit', $eligibility['Eligibility']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Eligibility'), array('action' => 'delete', $eligibility['Eligibility']['id']), array(), __('Are you sure you want to delete # %s?', $eligibility['Eligibility']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Eligibilities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eligibility'), array('action' => 'add')); ?> </li>
	</ul>
</div>
