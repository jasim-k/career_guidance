

  <div class="container">
	<h3>Institutions</h3><?php echo $this->Html->link(__('Add Institutions'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Type</th>
			<th>City</th>
			<th>Code</th>
			<th>Address</th>
			<th>Phone</th>
			<th>Fax</th>
			<th>Email</th>
			<th>Website</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($institutions as $institution) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $institution['Institution']['name']; ?></td>
			<td><?php echo $institution['Inst_type']['inst_type']; ?></td>
			<td><?php echo $institution['City']['name']; ?></td>
			<td><?php echo $institution['Institution']['inst_code']; ?></td>
			<td><?php echo $institution['Institution']['address']; ?></td>
			<td><?php echo $institution['Institution']['phone']; ?></td>
			<td><?php echo $institution['Institution']['fax']; ?></td>
			<td><?php echo $institution['Institution']['email']; ?></td>
			<td><?php echo $institution['Institution']['website']; ?></td>
			<td><?php echo $institution['Institution']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'Institutions','action'=>'edit',$institution['Institution']['id']),array('class'=>'btn btn-success fa fa-pencil')); ?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'Institutions','action'=>'delete',$institution['Institution']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>