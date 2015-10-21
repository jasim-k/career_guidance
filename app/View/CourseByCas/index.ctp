<div class="container">
	<h3>Course By Certify Authority</h3><?php echo $this->Html->link(__('Add course By Certify Authority'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Course Code</th>
			<th>Stream</th>
			<th>Mode Study</th>
			<th>Co Code</th>
			<th>specialisation</th>
			<th>Certify Authority Code</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($courseByCas as $courseByCa) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $courseByCa['Course']['course_code']; ?></td>
			<td><?php echo $courseByCa['Stream']['stream']; ?></td>
			<td><?php echo $courseByCa['Mode']['mode_study']; ?></td>
			<td><?php echo $courseByCa['CourseByCa']['co_code']; ?></td>
			<td><?php echo $courseByCa['CourseByCa']['specialisation']; ?></td>
			<td><?php echo $courseByCa['Cert_authority']['ca_code']; ?></td>
			<td><?php echo $courseByCa['CourseByCa']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'CourseByCas','action'=>'edit',$courseByCa['CourseByCa']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'CourseByCas','action'=>'delete',$courseByCa['CourseByCa']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 







	



