<!-- <div class="eligibilityTests form">
<?php echo $this->Form->create('EligibilityTest'); ?>
	<fieldset>
		<legend><?php echo __('Add Eligibility Test'); ?></legend>
	<?php
		echo $this->Form->input('eligibility_test');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Eligibility Tests'), array('action' => 'index')); ?></li>
	</ul>
</div>
 -->

 <div class="container">
	<h3>Add Eligibility Test</h3>
	<form class="form" action="add" method="post">
		<div class="form-group">
			<label>Eligibility Test:<span class="mandatory">*</span></label>
			<?php echo $this->Form->input('eligibility_test',array('class'=>'form-control','label'=>false,'required'=>'required')); ?>
		</div>
		<?php echo $this->Form->submit('Add Eligibility Test',array('class'=>'btn btn-primary btn-lg')); ?>
	</form>
</div>