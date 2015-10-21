<div class="container">
	<h3>Ranking Authorities</h3><?php echo $this->Html->link(__('Add Ranking Authorities'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Authority</th>
			<th>Ranking Authority Code</th>
			<th>Ranking Authority Type</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($ranking_authorities as $ranking_authority) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $ranking_authority['RankingAuthority']['authority']; ?></td>
			<td><?php echo $ranking_authority['RankingAuthority']['ra_code']; ?></td>
			<td><?php echo $ranking_authority['Ra_type']['ra_type']; ?></td>
			<td><?php echo $ranking_authority['RankingAuthority']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'RankingAuthorities','action'=>'edit',$ranking_authority['RankingAuthority']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'RankingAuthorities','action'=>'delete',$ranking_authority['RankingAuthority']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 


