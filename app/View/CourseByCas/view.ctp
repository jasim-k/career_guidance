<div class="courseByCas view">
<h2><?php echo __('Course By Ca'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($courseByCa['CourseByCa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C Code'); ?></dt>
		<dd>
			<?php echo h($courseByCa['CourseByCa']['c_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stream'); ?></dt>
		<dd>
			<?php echo h($courseByCa['CourseByCa']['stream']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mode Study'); ?></dt>
		<dd>
			<?php echo h($courseByCa['CourseByCa']['mode_study']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Code'); ?></dt>
		<dd>
			<?php echo h($courseByCa['CourseByCa']['co_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Specialisation'); ?></dt>
		<dd>
			<?php echo h($courseByCa['CourseByCa']['specialisation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ca Code'); ?></dt>
		<dd>
			<?php echo h($courseByCa['CourseByCa']['ca_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($courseByCa['CourseByCa']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course By Ca'), array('action' => 'edit', $courseByCa['CourseByCa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course By Ca'), array('action' => 'delete', $courseByCa['CourseByCa']['id']), array(), __('Are you sure you want to delete # %s?', $courseByCa['CourseByCa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Course By Cas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course By Ca'), array('action' => 'add')); ?> </li>
	</ul>
</div>
