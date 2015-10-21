<div class="affiliations form conatiner">
<?php echo $this->Form->create('Affiliation'); ?>
	<fieldset>
		<legend><?php echo __('Add Affiliation'); ?></legend>
	<?php
		
		echo $this->Form->input('ca_code',array('options'=>$ca_codes,'empty'=>'-- select one --','class'=>'form-control'));
		echo $this->Form->input('inst_code',array('options'=>$inst_codes,'empty'=>'-- select one --','class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>








 