<div class="subjectThrees view">
<h2><?php echo __('Subject Three'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subjectThree['SubjectThree']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject3'); ?></dt>
		<dd>
			<?php echo h($subjectThree['SubjectThree']['subject3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($subjectThree['SubjectThree']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subject Three'), array('action' => 'edit', $subjectThree['SubjectThree']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subject Three'), array('action' => 'delete', $subjectThree['SubjectThree']['id']), array(), __('Are you sure you want to delete # %s?', $subjectThree['SubjectThree']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subject Threes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject Three'), array('action' => 'add')); ?> </li>
	</ul>
</div>
