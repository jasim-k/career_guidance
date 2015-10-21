<div class="container">
	<h3>Institution Types</h3><?php echo $this->Html->link(__('Add Institution Type'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Institution Type</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($inst_types as $inst_type) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $inst_type['InstType']['inst_type']; ?></td>
			<td><?php echo $inst_type['InstType']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'InstTypes','action'=>'edit',$inst_type['InstType']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'InstTypes','action'=>'delete',$inst_type['InstType']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 


