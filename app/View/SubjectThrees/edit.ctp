<div class="subjectThrees form">
<?php echo $this->Form->create('SubjectThree'); ?>
	<fieldset>
		<legend><?php echo __('Edit Subject Three'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('subject_three',array('class'=>'form-control'));
		
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>