<!-- <div class="courseTypes form">
<?php echo $this->Form->create('CourseType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Course Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('course_type');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CourseType.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('CourseType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Course Types'), array('action' => 'index')); ?></li>
	</ul>
</div>
 -->

 <div class="container">
<?php echo $this->Form->create('CourseType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Course Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('course_type',array('class'=>'form-control'));
		// echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>
