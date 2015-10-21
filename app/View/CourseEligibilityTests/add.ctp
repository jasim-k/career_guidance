<div class="courseEligibilityTests form">
<?php echo $this->Form->create('CourseEligibilityTest'); ?>
	<fieldset>
		<legend><?php echo __('Add Course Eligibility Test'); ?></legend>
	<?php
		
		echo $this->Form->input('eligibility_test',array('options'=>$eligibility_tests,'empty'=>'-- select one --','class'=>'form-control'));
		echo $this->Form->input('co_code',array('options'=>$co_codes,'empty'=>'-- select one --','class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>
