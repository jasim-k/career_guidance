<div class="container">
	<h3>Certify Authority Ranks</h3><?php echo $this->Html->link(__('Add Ca Ranks'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Ranking Authority Code</th>
			<th>Certify Authority Code</th>
			<th>Rank Value</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($caRanks as $caRank) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $caRank['Ranking_authority']['ra_code']; ?></td>
			<td><?php echo $caRank['Cert_authority']['ca_code']; ?></td>
			<td><?php echo $caRank['CaRank']['rank_value']; ?></td>
			<td><?php echo $caRank['CaRank']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'CaRanks','action'=>'edit',$caRank['CaRank']['id']),array('class'=>'btn btn-success fa fa-pencil')); ?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'CaRanks','action'=>'delete',$caRank['CaRank']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 