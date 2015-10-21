<!-- <div class="modes form">
<?php echo $this->Form->create('Mode'); ?>
	<fieldset>
		<legend><?php echo __('Add Mode'); ?></legend>
	<?php
		echo $this->Form->input('mode_study');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Modes'), array('action' => 'index')); ?></li>
	</ul>
</div> -->

<div class="container">
	<h3>Add Modes</h3>
	<form class="form" action="add" method="post">
		<div class="form-group">
			<label>Mode:<span class="mandatory">*</span></label>
			<?php echo $this->Form->input('mode',array('class'=>'form-control','label'=>false,'required'=>'required')); ?>
		</div>
		<?php echo $this->Form->submit('Add Mode',array('class'=>'btn btn-primary btn-lg')); ?>
	</form>
</div>