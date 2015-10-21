
 <div class="container">
	<h3>Subject One</h3><?php echo $this->Html->link(__('Add Subject One'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Subject One</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($subjectones as $subjectone) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $subjectone['SubjectOne']['subject_one']; ?></td>
			<td><?php echo $subjectone['SubjectOne']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'SubjectOnes','action'=>'edit',$subjectone['SubjectOne']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'SubjectOnes','action'=>'delete',$subjectone['SubjectOne']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 