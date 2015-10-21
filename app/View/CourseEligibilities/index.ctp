<div class="container">
	<h3>Course Eligibilities</h3><?php echo $this->Html->link(__('Add Course Eligibilities'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Eligibility</th>
			<th>Set No</th>
			<th>CO Code</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($courseEligibilities as $courseEligibility) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $courseEligibility['Eligibility']['eligibility']; ?></td>
			<td><?php echo $courseEligibility['CourseEligibility']['set_no']; ?></td>
			<td><?php echo $courseEligibility['Course_by_ca']['co_code']; ?></td>
			<td><?php echo $courseEligibility['CourseEligibility']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'CourseEligibilities','action'=>'edit',$courseEligibility['CourseEligibility']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'CourseEligibilities','action'=>'delete',$courseEligibility['CourseEligibility']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 







	



