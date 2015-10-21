<!-- <div class="eligibilities form">
<?php echo $this->Form->create('Eligibility'); ?>
	<fieldset>
		<legend><?php echo __('Add Eligibility'); ?></legend>
	<?php
		echo $this->Form->input('eligibility');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Eligibilities'), array('action' => 'index')); ?></li>
	</ul>
</div>
 -->


<div class="container">
	<h3>Add Eligibility</h3>
	<form class="form" action="add" method="post">
		<div class="form-group">
			<label>Eligibility:<span class="mandatory">*</span></label>
			<?php echo $this->Form->input('eligibility',array('class'=>'form-control','label'=>false,'required'=>'required')); ?>
		</div>
		<?php echo $this->Form->submit('Add Eligibility',array('class'=>'btn btn-primary btn-lg')); ?>
	</form>
</div>