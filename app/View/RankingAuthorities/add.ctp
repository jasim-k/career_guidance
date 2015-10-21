<div class="rankingAuthorities form">
<?php echo $this->Form->create('RankingAuthority'); ?>
	<fieldset>
		<legend><?php echo __('Add Ranking Authority'); ?></legend>
	<?php
		
		echo $this->Form->input('authority',array('class'=>'form-control'));
		echo $this->Form->input('ra_code',array('class'=>'form-control'));
		echo $this->Form->input('ra_type',array('options'=>$ra_types,'empty'=>'-- select one --','class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>
