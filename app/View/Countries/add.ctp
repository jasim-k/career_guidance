
  <div class="container col-md-12">
	<h3>Add Country</h3>
	<form class="form" action="add" method="post">
		<div class="form-group">
			<label>Country Code</span></label>
			<?php echo $this->Form->input('sortname',array('class'=>'form-control','label'=>false,'required'=>'required')); ?>
			<label>Country</span></label>
			<?php echo $this->Form->input('name',array('class'=>'form-control','label'=>false,'required'=>'required')); ?>
		</div>
		<?php echo $this->Form->submit('Add Inst Type',array('class'=>'btn btn-primary btn-lg')); ?>
	</form>
</div>