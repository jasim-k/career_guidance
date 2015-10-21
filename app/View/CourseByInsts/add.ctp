
<div class="courseByInsts form conatiner">
<?php echo $this->Form->create('CourseByInst'); ?>
	<fieldset>
		<legend><?php echo __('Add CourseByInst'); ?></legend>
	<?php
		
		echo $this->Form->input('Institution.inst_code',array('options'=>$inst_codes,'empty'=>'-- select one --','class'=>'form-control'));

		echo $this->Form->input('intake',array('class'=>'form-control'));

		echo $this->Form->input('Course_by_ca.co_code',array('options'=>$co_codes,'empty'=>'-- select one --','class'=>'form-control'));
	
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>




