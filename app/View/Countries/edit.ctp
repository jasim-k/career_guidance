
 <div class="container">
<?php echo $this->Form->create('Country'); ?>
	<fieldset>
		<h3><?php echo __('Edit Country'); ?></h3>
	<?php
		echo $this->Form->input('id');?>			
		<label>Country Code</span></label>
			<?php echo $this->Form->input('sortname',array('class'=>'form-control','label'=>false,'required'=>'required')); ?>
			<label>Country</span></label>
			<?php echo $this->Form->input('name',array('class'=>'form-control','label'=>false,'required'=>'required'));  ?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
</div>
