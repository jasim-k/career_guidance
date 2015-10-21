

 <div class="container">
	<h3>Eligibility Test</h3><?php echo $this->Html->link(__('Add Eligibility Test'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Eligibility Test</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($eligibility_tests as $eligibility_test) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $eligibility_test['EligibilityTest']['eligibility_test']; ?></td>
			<td><?php echo $eligibility_test['EligibilityTest']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'eligibilityTests','action'=>'edit',$eligibility_test['EligibilityTest']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'EligibilityTests','action'=>'delete',$eligibility_test['EligibilityTest']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 