<!-- <div class="entrances form">
<?php echo $this->Form->create('Entrance'); ?>
	<fieldset>
		<legend><?php echo __('Add Entrance'); ?></legend>
	<?php
		echo $this->Form->input('entrance');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Entrances'), array('action' => 'index')); ?></li>
	</ul>
</div>
 -->

 <div class="container">
	<h3>Add Entrance</h3>
	<form class="form" action="add" method="post">
		<div class="form-group">
			<label>CA Type:<span class="mandatory">*</span></label>
			<?php echo $this->Form->input('entrance',array('class'=>'form-control','label'=>false,'required'=>'required')); ?>
		</div>
		<?php echo $this->Form->submit('Add Entrance',array('class'=>'btn btn-primary btn-lg')); ?>
	</form>
</div>