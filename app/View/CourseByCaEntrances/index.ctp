<div class="container">
	<h3>Course By Ca Entrances</h3><?php echo $this->Html->link(__('Add Course By Ca Entrances'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>CO Code</th>
			<th>Entrance</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($courseByCaEntrances as $courseByCaEntrance) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $courseByCaEntrance['Course_by_ca']['co_code']; ?></td>
			<td><?php echo $courseByCaEntrance['Entrance']['entrance']; ?></td>
			<td><?php echo $courseByCaEntrance['CourseByCaEntrance']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'CourseByCaEntrances','action'=>'edit',$courseByCaEntrance['CourseByCaEntrance']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'CourseByCaEntrances','action'=>'delete',$courseByCaEntrance['CourseByCaEntrance']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 







	



