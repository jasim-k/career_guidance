<div class="subjectOnes view">
<h2><?php echo __('Subject One'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subjectOne['SubjectOne']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject1'); ?></dt>
		<dd>
			<?php echo h($subjectOne['SubjectOne']['subject1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($subjectOne['SubjectOne']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subject One'), array('action' => 'edit', $subjectOne['SubjectOne']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subject One'), array('action' => 'delete', $subjectOne['SubjectOne']['id']), array(), __('Are you sure you want to delete # %s?', $subjectOne['SubjectOne']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subject Ones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject One'), array('action' => 'add')); ?> </li>
	</ul>
</div>
