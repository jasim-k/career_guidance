<div class="courseEligibilities form">
<?php echo $this->Form->create('CourseEligibility'); ?>
	<fieldset>
		<legend><?php echo __('Add Course Eligibility'); ?></legend>
	<?php
		
		echo $this->Form->input('eligibility',array('options'=>$eligibilities,'empty'=>'-- select one --','class'=>'form-control'));
		echo $this->Form->input('set_no',array('class'=>'form-control'));
		echo $this->Form->input('co_code',array('options'=>$co_codes,'empty'=>'-- select one --','class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>








 


