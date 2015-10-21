<div class="courseEligibilityTests form">
<?php echo $this->Form->create('CourseEligibilityTest'); ?>
	<fieldset>
		<legend><?php echo __('Edit Course Eligibility Test'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('eligibility_test',array('options'=>$eligibility_tests,'class'=>'form-control'));
		echo $this->Form->input('co_code',array('options'=>$co_codes,'class'=>'form-control'));

		
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>



