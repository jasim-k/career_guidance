<div class="container">
<?php echo $this->Form->create('CaType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ca Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ca_type',array('class'=>'form-control'));
		// echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>
