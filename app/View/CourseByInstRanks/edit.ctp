<div class="courseByInstRanks form">
<?php echo $this->Form->create('CourseByInstRank'); ?>
	<fieldset>
		<legend><?php echo __('Edit Course By Inst Rank'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('co_code',array('options'=>$co_codes,'class'=>'form-control'));
		echo $this->Form->input('inst_code',array('options'=>$inst_codes,'class'=>'form-control'));
		echo $this->Form->input('rank_value',array('class'=>'form-control'));
		
		echo $this->Form->input('ra_code',array('options'=>$ra_codes,'class'=>'form-control'));
		
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>



