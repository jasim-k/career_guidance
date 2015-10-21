<div class="courseByCaEntrances view">
<h2><?php echo __('Course By Ca Entrance'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($courseByCaEntrance['CourseByCaEntrance']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Code'); ?></dt>
		<dd>
			<?php echo h($courseByCaEntrance['CourseByCaEntrance']['co_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entrance'); ?></dt>
		<dd>
			<?php echo h($courseByCaEntrance['CourseByCaEntrance']['entrance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($courseByCaEntrance['CourseByCaEntrance']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course By Ca Entrance'), array('action' => 'edit', $courseByCaEntrance['CourseByCaEntrance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course By Ca Entrance'), array('action' => 'delete', $courseByCaEntrance['CourseByCaEntrance']['id']), array(), __('Are you sure you want to delete # %s?', $courseByCaEntrance['CourseByCaEntrance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Course By Ca Entrances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course By Ca Entrance'), array('action' => 'add')); ?> </li>
	</ul>
</div>
