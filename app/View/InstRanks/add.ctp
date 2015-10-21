<div class="instRanks form">
<?php echo $this->Form->create('InstRank'); ?>
	<fieldset>
		<legend><?php echo __('Add Inst Rank'); ?></legend>
	<?php
		echo $this->Form->input('inst_code',array('options'=>$inst_codes,'empty'=>'-- select one --','class'=>'form-control'));
		//echo pr($ra_codes) ; 
		echo $this->Form->input('ra_code',array('options'=>$ra_codes,'empty'=>'-- select one --','class'=>'form-control'));
		echo $this->Form->input('rank_value',array('class'=>'form-control'));
		
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>











