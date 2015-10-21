<?php //pr($location); exit; ?><div class="caRanks form">
<?php echo $this->Form->create('CaRank'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ca Rank'); ?></legend>
	<?php
		echo $this->Form->input('id');
		
		echo $this->Form->input('ra_code',array('options'=>$ra_codes,'class'=>'form-control'));
		echo $this->Form->input('ca_code',array('options'=>$ca_codes,'class'=>'form-control'));
		echo $this->Form->input('rank_value',array('class'=>'form-control'));
		//echo $this->Form->input('rank_value',array('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>





