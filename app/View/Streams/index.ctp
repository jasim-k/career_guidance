


 <div class="container">
	<h3>Streams</h3><?php echo $this->Html->link(__('Add Streams'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Streams</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($streams as $stream) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $stream['Stream']['stream']; ?></td>
			<td><?php echo $stream['Stream']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'Streams','action'=>'edit',$stream['Stream']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'Streams','action'=>'delete',$stream['Stream']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 