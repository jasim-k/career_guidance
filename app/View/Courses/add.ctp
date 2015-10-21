<div class="courses form conatiner">
<?php echo $this->Form->create('Course'); ?>
	<fieldset>
		<legend><?php echo __('Add Course'); ?></legend>
	<?php
		echo $this->Form->input('course',array('class'=>'form-control'));
		echo $this->Form->input('course_level',array('options'=>$course_levels,'empty'=>'-- select one --','class'=>'form-control'));
		echo $this->Form->input('course_type',array('options'=>$course_types,'empty'=>'-- select one --','class'=>'form-control'));
		echo $this->Form->input('course_code',array('class'=>'form-control'));
		echo $this->Form->input('subject_one',array('options'=>$subject_ones,'empty'=>'-- select one --','class'=>'form-control'));
		echo $this->Form->input('subject_two',array('options'=>$subject_twos,'empty'=>'-- select one --','class'=>'form-control'));
		echo $this->Form->input('subject_three',array('options'=>$subject_threes,'empty'=>'-- select one --','class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>
