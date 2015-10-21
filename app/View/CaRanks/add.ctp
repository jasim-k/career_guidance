<div class="caRanks form conatiner">
<?php echo $this->Form->create('CaRank'); ?>
	<fieldset>
		<legend><?php echo __('Add CaRank'); ?></legend>
	<?php
		
		echo $this->Form->input('ra_code',array('options'=>$ra_codes,'empty'=>'-- select one --','class'=>'form-control'));
		echo $this->Form->input('ca_code',array('options'=>$ca_codes,'empty'=>'-- select one --','class'=>'form-control'));
		echo $this->Form->input('rank_value',array('class'=>'form-control'));
		
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>