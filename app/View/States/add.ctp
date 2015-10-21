<div class="states form col-md-12">
<?php echo $this->Form->create('State'); ?>
	<fieldset>
		<h3><?php echo __('Add State'); ?></h3>
	<?php
		echo $this->Form->input('name',array('class'=>'form-control'));
		echo $this->Form->input('country_id',array('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>
