<div class="subjectTwos form">
<?php echo $this->Form->create('SubjectTwo'); ?>
	<fieldset>
		<legend><?php echo __('Add Subject Two'); ?></legend>
	<?php
		echo $this->Form->input('subject_two',array('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>

