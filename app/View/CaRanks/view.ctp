<div class="caRanks view">
<h2><?php echo __('Ca Rank'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($caRank['CaRank']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ra Code'); ?></dt>
		<dd>
			<?php echo h($caRank['CaRank']['ra_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ca Code'); ?></dt>
		<dd>
			<?php echo h($caRank['CaRank']['ca_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rank Value'); ?></dt>
		<dd>
			<?php echo h($caRank['CaRank']['rank_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($caRank['CaRank']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ca Rank'), array('action' => 'edit', $caRank['CaRank']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ca Rank'), array('action' => 'delete', $caRank['CaRank']['id']), array(), __('Are you sure you want to delete # %s?', $caRank['CaRank']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ca Ranks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ca Rank'), array('action' => 'add')); ?> </li>
	</ul>
</div>
