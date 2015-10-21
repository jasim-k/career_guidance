

 <div class="container">
	<h3>Entrances</h3><?php echo $this->Html->link(__('Add Entrance'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Entrance</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($entrances as $entrance) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $entrance['Entrance']['entrance']; ?></td>
			<td><?php echo $entrance['Entrance']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'Entrances','action'=>'edit',$entrance['Entrance']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'Entrances','action'=>'delete',$entrance['Entrance']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 