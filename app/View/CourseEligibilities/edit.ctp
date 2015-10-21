<div class="courseEligibilities form">
<?php echo $this->Form->create('CourseEligibility'); ?>
	<fieldset>
		<legend><?php echo __('Edit Course Eligibility'); ?></legend>
	<?php
		echo $this->Form->input('id');
		
		echo $this->Form->input('eligibility',array('options'=>$eligibilities,'class'=>'form-control'));
		echo $this->Form->input('set_no',array('class'=>'form-control'));
		echo $this->Form->input('co_code',array('options'=>$co_codes,'class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>







