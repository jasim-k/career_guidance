<!-- <div class="instTypes form">
<?php echo $this->Form->create('InstType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Inst Type'); ?></legend>
	<?php
		echo $this->Form->input('inst_type');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('InstType.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('InstType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Inst Types'), array('action' => 'index')); ?></li>
	</ul>
</div>
 -->

 <div class="container">
<?php echo $this->Form->create('InstType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Inst Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('inst_type',array('class'=>'form-control'));
		// echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>
