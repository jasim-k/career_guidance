

 <div class="container">
	<h3>Modes</h3><?php echo $this->Html->link(__('Add Modes'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Mode</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($modes as $mode) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $mode['Mode']['mode_study']; ?></td>
			<td><?php echo $mode['Mode']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'Modes','action'=>'edit',$mode['Mode']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'Modes','action'=>'delete',$mode['Mode']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 