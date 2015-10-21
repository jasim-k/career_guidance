<div class="courseTypes view">
<h2><?php echo __('Course Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($courseType['CourseType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course Type'); ?></dt>
		<dd>
			<?php echo h($courseType['CourseType']['course_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($courseType['CourseType']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course Type'), array('action' => 'edit', $courseType['CourseType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course Type'), array('action' => 'delete', $courseType['CourseType']['id']), array(), __('Are you sure you want to delete # %s?', $courseType['CourseType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
