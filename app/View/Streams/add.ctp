<!-- <div class="streams form">
<?php echo $this->Form->create('Stream'); ?>
	<fieldset>
		<legend><?php echo __('Add Stream'); ?></legend>
	<?php
		echo $this->Form->input('stream');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Streams'), array('action' => 'index')); ?></li>
	</ul>
</div>
 -->

 <div class="container">
	<h3>Add Stream</h3>
	<form class="form" action="add" method="post">
		<div class="form-group">
			<label>Stream:<span class="mandatory">*</span></label>
			<?php echo $this->Form->input('stream',array('class'=>'form-control','label'=>false,'required'=>'required')); ?>
		</div>
		<?php echo $this->Form->submit('Add Stream',array('class'=>'btn btn-primary btn-lg')); ?>
	</form>
</div>