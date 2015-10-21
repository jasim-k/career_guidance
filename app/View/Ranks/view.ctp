<div class="ranks view">
<h2><?php echo __('Rank'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rank['Rank']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rank'); ?></dt>
		<dd>
			<?php echo h($rank['Rank']['rank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ra Code'); ?></dt>
		<dd>
			<?php echo h($rank['Rank']['ra_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rank Value'); ?></dt>
		<dd>
			<?php echo h($rank['Rank']['rank_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($rank['Rank']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rank'), array('action' => 'edit', $rank['Rank']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rank'), array('action' => 'delete', $rank['Rank']['id']), array(), __('Are you sure you want to delete # %s?', $rank['Rank']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ranks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rank'), array('action' => 'add')); ?> </li>
	</ul>
</div>
