<div class="container">
	<h3>Subject Two</h3><?php echo $this->Html->link(__('Add Subject Two'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Subject Two</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($subjecttwos as $subjecttwo) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $subjecttwo['SubjectTwo']['subject_two']; ?></td>
			<td><?php echo $subjecttwo['SubjectTwo']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'SubjectTwos','action'=>'edit',$subjecttwo['SubjectTwo']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'SubjectTwos','action'=>'delete',$subjecttwo['SubjectTwo']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 