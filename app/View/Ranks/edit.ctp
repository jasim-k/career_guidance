<div class="Ranks form">
<?php echo $this->Form->create('Rank'); ?>
	<fieldset>
		<legend><?php echo __('Edit Rank'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('rank',array('class'=>'form-control'));
		echo $this->Form->input('ra_code',array('options'=>$ra_codes,'class'=>'form-control'));
		echo $this->Form->input('rank_value',array('class'=>'form-control'));
		
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>







