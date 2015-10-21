<div class="courseEligibilityTests view">
<h2><?php echo __('Course Eligibility Test'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($courseEligibilityTest['CourseEligibilityTest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eligibility Test'); ?></dt>
		<dd>
			<?php echo h($courseEligibilityTest['CourseEligibilityTest']['eligibility_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Code'); ?></dt>
		<dd>
			<?php echo h($courseEligibilityTest['CourseEligibilityTest']['co_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($courseEligibilityTest['CourseEligibilityTest']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course Eligibility Test'), array('action' => 'edit', $courseEligibilityTest['CourseEligibilityTest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course Eligibility Test'), array('action' => 'delete', $courseEligibilityTest['CourseEligibilityTest']['id']), array(), __('Are you sure you want to delete # %s?', $courseEligibilityTest['CourseEligibilityTest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Eligibility Tests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Eligibility Test'), array('action' => 'add')); ?> </li>
	</ul>
</div>
