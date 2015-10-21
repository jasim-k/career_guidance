<div class="container">
	<h3>Certify Authority Types</h3><?php echo $this->Html->link(__('Add Certify Authority Type'), array('action' => 'add','1'),array('class'=>'btn btn-primary pull-right')); ?>
	
	<br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Certify Authority Type</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($ca_types as $ca_type) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $ca_type['CaType']['ca_type']; ?></td>
			<td><?php echo $ca_type['CaType']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'CATypes','action'=>'edit',$ca_type['CaType']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'CATypes','action'=>'delete',$ca_type['CaType']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 