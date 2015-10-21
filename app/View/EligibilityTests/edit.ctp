<!-- <div class="eligibilityTests form">
<?php echo $this->Form->create('EligibilityTest'); ?>
	<fieldset>
		<legend><?php echo __('Edit Eligibility Test'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('eligibility_test');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EligibilityTest.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('EligibilityTest.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Eligibility Tests'), array('action' => 'index')); ?></li>
	</ul>
</div>
 -->

 <div class="container">
<?php echo $this->Form->create('EligibilityTest'); ?>
	<fieldset>
		<legend><?php echo __('Edit Eligibility Test'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('eligibility_test',array('class'=>'form-control'));
		// echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>
