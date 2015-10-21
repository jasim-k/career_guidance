<div class="courseRanks view">
<h2><?php echo __('Course Rank'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($courseRank['CourseRank']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rank'); ?></dt>
		<dd>
			<?php echo h($courseRank['CourseRank']['rank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ra Code'); ?></dt>
		<dd>
			<?php echo h($courseRank['CourseRank']['ra_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rank Value'); ?></dt>
		<dd>
			<?php echo h($courseRank['CourseRank']['rank_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($courseRank['CourseRank']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course Rank'), array('action' => 'edit', $courseRank['CourseRank']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course Rank'), array('action' => 'delete', $courseRank['CourseRank']['id']), array(), __('Are you sure you want to delete # %s?', $courseRank['CourseRank']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Ranks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Rank'), array('action' => 'add')); ?> </li>
	</ul>
</div>
