<div class="container">
	<h3>Ranking Authority Types</h3><?php echo $this->Html->link(__('Add Ranking Authority Types'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Ranking Authority Type</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($raTypes as $raType) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $raType['RaType']['ra_type']; ?></td>
			<td><?php echo $raType['RaType']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'RaTypes','action'=>'edit',$raType['RaType']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'RaTypes','action'=>'delete',$raType['RaType']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 