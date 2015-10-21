<div class="container">
	<h3>Affiliations</h3><?php echo $this->Html->link(__('Add Affiliations'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Cert Authority Code</th>
			<th>Institution Code</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($affiliations as $affiliations) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $affiliations['Cert_authority']['ca_code']; ?></td>
			<td><?php echo $affiliations['Institution']['inst_code']; ?></td>
			<td><?php echo $affiliations['Affiliation']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'Affiliations','action'=>'edit',$affiliations['Affiliation']['id']),array('class'=>'btn btn-success fa fa-pencil'));?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'Affiliations','action'=>'delete',$affiliations['Affiliation']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
</div> 







	
