<?php //pr($location); exit; ?><div class="affiliations form">
<?php echo $this->Form->create('Affiliation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Affiliation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ca_code',array('options'=>$ca_codes,'class'=>'form-control'));
		echo $this->Form->input('inst_code',array('options'=>$inst_codes,'class'=>'form-control'));

		
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>



