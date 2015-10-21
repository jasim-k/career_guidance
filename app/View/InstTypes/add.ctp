<!-- <div class="instTypes form">
<?php echo $this->Form->create('InstType'); ?>
	<fieldset>
		<legend><?php echo __('Add Inst Type'); ?></legend>
	<?php
		echo $this->Form->input('inst_type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Inst Types'), array('action' => 'index')); ?></li>
	</ul>
</div>
 -->

 <div class="container">
	<h3>Add Inst Type</h3>
	<form class="form" action="add" method="post">
		<div class="form-group">
			<label>Inst Type:<span class="mandatory">*</span></label>
			<?php echo $this->Form->input('inst_type',array('class'=>'form-control','label'=>false,'required'=>'required')); ?>
		</div>
		<?php echo $this->Form->submit('Add Inst Type',array('class'=>'btn btn-primary btn-lg')); ?>
	</form>
</div>