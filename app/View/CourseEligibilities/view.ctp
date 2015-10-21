<div class="courseEligibilities view">
<h2><?php echo __('Course Eligibility'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($courseEligibility['CourseEligibility']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eligibility'); ?></dt>
		<dd>
			<?php echo h($courseEligibility['CourseEligibility']['eligibility']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Set No'); ?></dt>
		<dd>
			<?php echo h($courseEligibility['CourseEligibility']['set_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Code'); ?></dt>
		<dd>
			<?php echo h($courseEligibility['CourseEligibility']['co_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($courseEligibility['CourseEligibility']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course Eligibility'), array('action' => 'edit', $courseEligibility['CourseEligibility']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course Eligibility'), array('action' => 'delete', $courseEligibility['CourseEligibility']['id']), array(), __('Are you sure you want to delete # %s?', $courseEligibility['CourseEligibility']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Eligibilities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Eligibility'), array('action' => 'add')); ?> </li>
	</ul>
</div>
