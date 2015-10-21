<div class="container">
	<h3>Ranks</h3><?php echo $this->Html->link(__('Add Ranks'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Rank</th>
			<th>Ranking Authority Code</th>
			<th>Rank Value</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($ranks as $rank) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $rank['Rank']['rank']; ?></td>
			<td><?php echo $rank['Ranking_authority']['ra_code']; ?></td>
			<td><?php echo $rank['Rank']['rank_value']; ?></td>
			<td><?php echo $rank['Rank']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'Ranks','action'=>'edit',$rank['Rank']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'Ranks','action'=>'delete',$rank['Rank']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 







	






