<div class="courseLevels view">
<h2><?php echo __('Course Level'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($courseLevel['CourseLevel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course Level'); ?></dt>
		<dd>
			<?php echo h($courseLevel['CourseLevel']['course_level']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($courseLevel['CourseLevel']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course Level'), array('action' => 'edit', $courseLevel['CourseLevel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course Level'), array('action' => 'delete', $courseLevel['CourseLevel']['id']), array(), __('Are you sure you want to delete # %s?', $courseLevel['CourseLevel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Levels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Level'), array('action' => 'add')); ?> </li>
	</ul>
</div>
