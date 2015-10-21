<div class="courseByInstRanks view">
<h2><?php echo __('Course By Inst Rank'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($courseByInstRank['CourseByInstRank']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Code'); ?></dt>
		<dd>
			<?php echo h($courseByInstRank['CourseByInstRank']['co_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inst Code'); ?></dt>
		<dd>
			<?php echo h($courseByInstRank['CourseByInstRank']['inst_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rank Value'); ?></dt>
		<dd>
			<?php echo h($courseByInstRank['CourseByInstRank']['rank_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ra Code'); ?></dt>
		<dd>
			<?php echo h($courseByInstRank['CourseByInstRank']['ra_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($courseByInstRank['CourseByInstRank']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course By Inst Rank'), array('action' => 'edit', $courseByInstRank['CourseByInstRank']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course By Inst Rank'), array('action' => 'delete', $courseByInstRank['CourseByInstRank']['id']), array(), __('Are you sure you want to delete # %s?', $courseByInstRank['CourseByInstRank']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Course By Inst Ranks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course By Inst Rank'), array('action' => 'add')); ?> </li>
	</ul>
</div>
