<div class="courseByInsts view">
<h2><?php echo __('Course By Inst'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($courseByInst['CourseByInst']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inst Code'); ?></dt>
		<dd>
			<?php echo h($courseByInst['CourseByInst']['inst_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('In Take'); ?></dt>
		<dd>
			<?php echo h($courseByInst['CourseByInst']['in_take']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Code'); ?></dt>
		<dd>
			<?php echo h($courseByInst['CourseByInst']['co_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($courseByInst['CourseByInst']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course By Inst'), array('action' => 'edit', $courseByInst['CourseByInst']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course By Inst'), array('action' => 'delete', $courseByInst['CourseByInst']['id']), array(), __('Are you sure you want to delete # %s?', $courseByInst['CourseByInst']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Course By Insts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course By Inst'), array('action' => 'add')); ?> </li>
	</ul>
</div>
