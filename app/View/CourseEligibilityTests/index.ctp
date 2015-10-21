<div class="container">
	<h3>Course Eligibility Tests</h3><?php echo $this->Html->link(__('Add Course Eligibility Tests'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Eligibility Test</th>
			<th>CO Code</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($courseEligibilityTests as $courseEligibilityTest) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $courseEligibilityTest['Eligibility_test']['eligibility_test']; ?></td>
			<td><?php echo $courseEligibilityTest['Course_by_ca']['co_code']; ?></td>
			<td><?php echo $courseEligibilityTest['CourseEligibilityTest']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'CourseEligibilityTests','action'=>'edit',$courseEligibilityTest['CourseEligibilityTest']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'CourseEligibilityTests','action'=>'delete',$courseEligibilityTest['CourseEligibilityTest']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 







	



