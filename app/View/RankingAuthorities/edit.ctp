<div class="rankingAuthorities form">
<?php echo $this->Form->create('RankingAuthority'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ranking Authority'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('authority',array('class'=>'form-control'));
		echo $this->Form->input('ra_code',array('class'=>'form-control'));
		echo $this->Form->input('ra_type',array('options'=>$ra_types,'class'=>'form-control'));
		// echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>