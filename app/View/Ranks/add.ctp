<div class="Ranks form">
<?php echo $this->Form->create('Rank'); ?>
	<fieldset>
		<legend><?php echo __('Add Rank'); ?></legend>
	<?php

		echo $this->Form->input('rank',array('class'=>'form-control'));
		echo $this->Form->input('ra_code',array('options'=>$ra_codes,'empty'=>'-- select one --','class'=>'form-control'));
		echo $this->Form->input('rank_value',array('class'=>'form-control'));
		
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>








 




