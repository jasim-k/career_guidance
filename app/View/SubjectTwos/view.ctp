<div class="subjectTwos view">
<h2><?php echo __('Subject Two'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subjectTwo['SubjectTwo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject2'); ?></dt>
		<dd>
			<?php echo h($subjectTwo['SubjectTwo']['subject2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($subjectTwo['SubjectTwo']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subject Two'), array('action' => 'edit', $subjectTwo['SubjectTwo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subject Two'), array('action' => 'delete', $subjectTwo['SubjectTwo']['id']), array(), __('Are you sure you want to delete # %s?', $subjectTwo['SubjectTwo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subject Twos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject Two'), array('action' => 'add')); ?> </li>
	</ul>
</div>
