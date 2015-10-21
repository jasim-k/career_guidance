
<div class="courseByCas form">
<?php echo $this->Form->create('CourseByCa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Course By Ca'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('course_code',array('options'=>$course_codes,'class'=>'form-control'));
		echo $this->Form->input('stream',array('options'=>$streams,'class'=>'form-control'));
		echo $this->Form->input('mode_study',array('options'=>$mode_studies,'class'=>'form-control'));
		echo $this->Form->input('co_code',array('class'=>'form-control'));
		echo $this->Form->input('specialisation',array('class'=>'form-control'));
		echo $this->Form->input('ca_code',array('options'=>$ca_codes,'class'=>'form-control'));
		
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>







