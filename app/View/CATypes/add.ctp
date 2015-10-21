<div class="container">
	<h3>Add CA Types</h3>
	<form class="form" action="add" method="post">
		<div class="form-group">
			<label>CA Type:<span class="mandatory">*</span></label>
			<?php echo $this->Form->input('ca_type',array('class'=>'form-control','label'=>false,'required'=>'required')); ?>
		</div>
		<?php echo $this->Form->submit('Add CA Type',array('class'=>'btn btn-primary btn-lg')); ?>
	</form>
</div>