<div class="states form">
<?php echo $this->Form->create('State'); ?>
	<fieldset>
		<h3><?php echo __('Edit State'); ?></h3>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('class'=>'form-control'));
		echo $this->Form->input('country_id',array('class'=>'form-control', 'disabled' => 'disabled'));
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('State.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('State.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List States'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
