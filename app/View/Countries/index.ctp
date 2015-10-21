
  <div class="container">
	<h3>Countries</h3><?php echo $this->Html->link(__('Add Contries'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br><br>




	<?php 
echo $this->Form->create(null, array(
    'url' => array('controller' => 'Countries', 'action' => 'search'),
    'type' => 'post',
    'inputDefaults' => array(
        'label' => false,
        'div' => false
    )


));

echo $this->Form->input(
    'Enter_Code',
    array('label' => 'Code', 'placeholder'=> 'Search...')
);

$options = array(
    'label' => 'Submit',
    'div' => array(
        'class' => 'glass-pill',
    )
);
 ?><br><br>

	<table cellpadding="0" cellspacing="0" border="0" class=" table table-bordered table-striped	 display" width="100%" >
		<thead>
		<tr>
			<th>#</th>
			<th>Country Code</th>
			<th>Country Name</th>
			<th>Actions</th>
			</tr>
		</thead>
		<?php if($s_id!=10) { $count=1; foreach($countries as $Country) { ?>
		<tbody>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $Country['Country']['sortname']; ?></td>
			<td><?php echo $Country['Country']['name']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'Countries','action'=>'edit',$Country['Country']['id']),array('class'=>'btn btn-success fa fa-pencil
')); ?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'Countries','action'=>'delete',$Country['Country']['id']),array('class'=>'btn btn-danger fa fa-trash-o
','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
			</tr>
		</tbody>
		<?php $count++; } } ?>

				<?php if ($s_id==10) { $count=1; foreach($countries as $Country) { ?>
		<tbody>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $Country['Countries']['sortname']; ?></td>
			<td><?php echo $Country['Countries']['name']; ?></td>
			<td>
				<?php echo $this->Html->link('',array('controller'=>'Countries','action'=>'edit',$Country['Countries']['id']),array('class'=>'btn btn-success fa fa-pencil
')); ?>&nbsp;<?php echo $this->Form->postLink('',array('controller'=>'Countries','action'=>'delete',$Country['Countries']['id']),array('class'=>'btn btn-danger fa fa-trash-o
','confirm'=>'Are you sure to delete this ?')); ?>
			</td>
			</tr>
		</tbody>
		<?php $count++; } } ?>


	</table>

	 <script>
	// 	$(document).ready(function() {
	// 		$('.datatable-1').dataTable();
	// 		$('.dataTables_paginate').addClass("btn-group datatable-pagination");
	// 		$('.dataTables_paginate > a').wrapInner('<span />');
	// 		$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
	// 		$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
	// 	} );
	// </script>