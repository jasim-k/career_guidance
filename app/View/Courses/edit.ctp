<?php //pr($location); exit; ?><div class="courses form">
<?php echo $this->Form->create('Course'); ?>
	<fieldset>
		<legend><?php echo __('Edit Course'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('course',array('class'=>'form-control'));
		echo $this->Form->input('course_level',array('options'=>$course_levels,'class'=>'form-control'));
		echo $this->Form->input('course_type',array('options'=>$course_types,'class'=>'form-control'));

		echo $this->Form->input('course_code',array('class'=>'form-control'));
		echo $this->Form->input('subject_one',array('options'=>$subject_ones,'class'=>'form-control'));
        echo $this->Form->input('subject_two',array('options'=>$subject_twos,'class'=>'form-control'));
        echo $this->Form->input('subject_three',array('options'=>$subject_threes,'class'=>'form-control'));

	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>
