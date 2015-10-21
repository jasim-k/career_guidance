<div class="container">
	<h3>Institution Ranks</h3><?php echo $this->Html->link(__('Add InstRanks'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Ranking Authority Code</th>
			<th>Institution Code</th>
			<th>Rank Value</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($instRanks as $instRank) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $instRank['Ranking_authority']['ra_code']; ?></td>
			<td><?php echo $instRank['Institution']['inst_code']; ?></td>
			<td><?php echo $instRank['InstRank']['rank_value']; ?></td>
			<td><?php echo $instRank['InstRank']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'InstRanks','action'=>'edit',$instRank['InstRank']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'InstRanks','action'=>'delete',$instRank['InstRank']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 







	



