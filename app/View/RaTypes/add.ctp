<div class="raTypes form">
<?php echo $this->Form->create('RaType'); ?>
	<fieldset>
		<legend><?php echo __('Add Ra Type'); ?></legend>
	<?php
		echo $this->Form->input('ra_type',array('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>
