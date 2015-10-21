<div class="cities form">
<?php echo $this->Form->create('City'); ?>
	<fieldset>
		<h3><?php echo __('Add City'); ?></h3>
	<?php
		echo $this->Form->input('name',array('class'=>'form-control'));
		echo $this->Form->input('state_id',array('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
