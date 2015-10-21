<div class="container">
	<h3>Subject Three</h3><?php echo $this->Html->link(__('Add Subject Three'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Subject Three</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($subjectthrees as $subjectthree) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $subjectthree['SubjectThree']['subject_three']; ?></td>
			<td><?php echo $subjectthree['SubjectThree']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'SubjectThrees','action'=>'edit',$subjectthree['SubjectThree']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'SubjectThrees','action'=>'delete',$subjectthree['SubjectThree']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 