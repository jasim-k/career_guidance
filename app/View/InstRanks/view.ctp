<div class="instRanks view">
<h2><?php echo __('Inst Rank'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($instRank['InstRank']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inst Code'); ?></dt>
		<dd>
			<?php echo h($instRank['InstRank']['inst_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ra Code'); ?></dt>
		<dd>
			<?php echo h($instRank['InstRank']['ra_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rank Value'); ?></dt>
		<dd>
			<?php echo h($instRank['InstRank']['rank_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($instRank['InstRank']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inst Rank'), array('action' => 'edit', $instRank['InstRank']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Inst Rank'), array('action' => 'delete', $instRank['InstRank']['id']), array(), __('Are you sure you want to delete # %s?', $instRank['InstRank']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inst Ranks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inst Rank'), array('action' => 'add')); ?> </li>
	</ul>
</div>
