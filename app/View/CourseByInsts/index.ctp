<div class="container">
	<h3>Course By Institutions</h3><?php echo $this->Html->link(__('Add Course By Insts'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Inst Code</th>
			<th>Intake</th>
			<th>CO Code</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($courseByInsts as $courseByInst) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $courseByInst['Institution']['inst_code']; ?></td>
			<td><?php echo $courseByInst['CourseByInst']['intake']; ?></td>
			<td><?php echo $courseByInst['Course_by_ca']['co_code']; ?></td>
			<td><?php echo $courseByInst['CourseByInst']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'CourseByInsts','action'=>'edit',$courseByInst['CourseByInst']['id']),array('class'=>'btn btn-success fa fa-pencil')); ?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'CourseByInsts','action'=>'delete',$courseByInst['CourseByInst']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 




