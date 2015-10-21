<div class="eligibilityTests view">
<h2><?php echo __('Eligibility Test'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eligibilityTest['EligibilityTest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eligibility Test'); ?></dt>
		<dd>
			<?php echo h($eligibilityTest['EligibilityTest']['eligibility_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($eligibilityTest['EligibilityTest']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Eligibility Test'), array('action' => 'edit', $eligibilityTest['EligibilityTest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Eligibility Test'), array('action' => 'delete', $eligibilityTest['EligibilityTest']['id']), array(), __('Are you sure you want to delete # %s?', $eligibilityTest['EligibilityTest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Eligibility Tests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eligibility Test'), array('action' => 'add')); ?> </li>
	</ul>
</div>
