<div class="subjectOnes form">
<?php echo $this->Form->create('SubjectOne'); ?>
	<fieldset>
		<legend><?php echo __('Add Subject One'); ?></legend>
	<?php
		echo $this->Form->input('subject_one',array('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>

