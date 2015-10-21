 <div class="container">
	<h3>Courses</h3><?php echo $this->Html->link(__('Add Courses'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Course</th>
			<th>Course Level</th>
			<th>Course Type</th>
			<th>Course Code</th>
			<th>Subject One</th>
			<th>Subject Two</th>
			<th>Subject Three</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($courses as $courses) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $courses['Course']['course']; ?></td>
			<td><?php echo $courses['Course_level']['course_level']; ?></td>
			<td><?php echo $courses['Course_type']['course_type']; ?></td>
			<td><?php echo $courses['Course']['course_code']; ?></td>
			<td><?php echo $courses['Subject_one']['subject_one']; ?></td>
			<td><?php echo $courses['Subject_two']['subject_two']; ?></td>
			<td><?php echo $courses['Subject_three']['subject_three']; ?></td>
			<td><?php echo $courses['Course']['date']; ?></td>


			<td>
				<?php echo $this->Html->link('',array('controller'=>'Courses','action'=>'edit',$courses['Course']['id']),array('class'=>'btn btn-success fa fa-pencil')); ?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'Courses','action'=>'delete',$courses['Course']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 