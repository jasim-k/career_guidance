<div class="container">
	<h3>Eligibilities</h3><?php echo $this->Html->link(__('Add Eligibilities'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Eligibility</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($eligibilities as $eligibility) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $eligibility['Eligibility']['eligibility']; ?></td>
			<td><?php echo $eligibility['Eligibility']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'Eligibilities','action'=>'edit',$eligibility['Eligibility']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'Eligibilities','action'=>'delete',$eligibility['Eligibility']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 

