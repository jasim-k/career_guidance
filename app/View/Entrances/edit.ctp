<!-- <div class="entrances form">
<?php echo $this->Form->create('Entrance'); ?>
	<fieldset>
		<legend><?php echo __('Edit Entrance'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('entrance');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Entrance.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Entrance.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Entrances'), array('action' => 'index')); ?></li>
	</ul>
</div>
 -->

 <div class="container">
<?php echo $this->Form->create('Entrance'); ?>
	<fieldset>
		<legend><?php echo __('Edit Entrance'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('entrance',array('class'=>'form-control'));
		// echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>
