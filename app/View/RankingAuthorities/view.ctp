<div class="rankingAuthorities view">
<h2><?php echo __('Ranking Authority'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rankingAuthority['RankingAuthority']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Authority'); ?></dt>
		<dd>
			<?php echo h($rankingAuthority['RankingAuthority']['authority']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ra Code'); ?></dt>
		<dd>
			<?php echo h($rankingAuthority['RankingAuthority']['ra_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($rankingAuthority['RankingAuthority']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ranking Authority'), array('action' => 'edit', $rankingAuthority['RankingAuthority']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ranking Authority'), array('action' => 'delete', $rankingAuthority['RankingAuthority']['id']), array(), __('Are you sure you want to delete # %s?', $rankingAuthority['RankingAuthority']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ranking Authorities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ranking Authority'), array('action' => 'add')); ?> </li>
	</ul>
</div>
