

 


 <div class="container">
	<h3>Certify Authorities</h3><?php echo $this->Html->link(__('Add Cert Authorities'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>
	<table class="table table-bordered border-striped">
		<tr>
			<th>#</th>
			<th>Certify Authority Name</th>
			<th>Certify Authority Type</th>
			<th>Certify Authority Code</th>
			<th>City</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
		<?php $count=1; foreach($certAuthorities as $certAuthority) { ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $certAuthority['CertAuthority']['ca_name']; ?></td>
			<td><?php echo $certAuthority['Ca_type']['ca_type']; ?></td>
			<td><?php echo $certAuthority['CertAuthority']['ca_code']; ?></td>
			<td><?php echo $certAuthority['City']['name']; ?></td>
			<td><?php echo $certAuthority['CertAuthority']['date']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'CertAuthorities','action'=>'edit',$certAuthority['CertAuthority']['id']),array('class'=>'btn btn-success fa fa-pencil')); ?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'CertAuthorities','action'=>'delete',$certAuthority['CertAuthority']['id']),array('class'=>'btn btn-danger fa fa-trash-o','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
		</tr>
		<?php $count++; }  ?>
		<tr></tr>
	</table>
	<?php echo $this->Html->link('ADD CATypes',array('controller'=>'CATypes','action'=>'add'),array('class'=>'btn btn-success','escape' => false)); ?>

             