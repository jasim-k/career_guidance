
   <?php //echo $s_id; 
  // pr($states); exit; ?>
   <div class="container">
	<h3>Add States</h3><?php  echo $this->Html->link(__('Add States'), array('action' => 'add'),array('class'=>'btn btn-primary pull-right')); ?><br>

	 <br>
<?php 
echo $this->Form->create(null, array(
    'url' => array('controller' => 'States', 'action' => 'search'),
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
 ?>
	  
	  <!-- <input type="text" name="query" placeholder="Search...."> -->
	  <?php 
	  // echo $this->Html->link(__(''), array('action' => 'search'),array('class'=>'btn btn-default fa fa-search')); ?>

	 <!-- <div class="input-group custom-search-form">
             <input type="text" class=" pull-right" placeholder="Search...">
             <span class="input-group-btn">
               <button class="btn btn-default pull-right" type="button">
             <i class="fa fa-search"></i>
            </button>
           </span>
      </div
 -->
<div class="states index">
	<h2><?php echo __('States'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-bordered border-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('#'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php if ($s_id!=10) {
		
	
	 $count=1; foreach ($states as $state): ?>
	<tr>
		<td><?php echo $count; ?>&nbsp;</td>
		<td><?php echo h($state['State']['name']); ?>&nbsp;</td>
		<td>
			<?php echo h($state['Country']['name']); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__(''), array('action' => 'edit', $state['State']['id']),array('class'=>'btn btn-success fa fa-pencil')); ?>
			<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $state['State']['id']),
			 array('class'=>'btn btn-danger fa fa-trash-o','confirm' => __('Are you sure you want to delete # %s?', $state['State']['id']))); ?>
		</td>
	</tr>
<?php $count++; endforeach;  } ?>


	<?php if ($s_id==10) {
		
	// echo $count; exit;
	 	if($count!=0)
	 	{
	 		$count=1; foreach ($states as $state): ?>
	<tr>
		<td><?php echo $count; ?>&nbsp;</td>
		<td><?php echo h($state['States']['name']); ?>&nbsp;</td>
		<td>
			<?php echo h($state['Countries']['name']); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__(''), array('action' => 'edit', $state['States']['id']),array('class'=>'btn btn-success fa fa-pencil')); ?>
			<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $state['States']['id']),
			 array('class'=>'btn btn-danger fa fa-trash-o','confirm' => __('Are you sure you want to delete # %s?', $state['States']['id']))); ?>
		</td>
	</tr>
<?php $count++; endforeach;  }
	 	}
	 	if($count==0)
	 	{ ?>
	 		<tr>
	 		<td align="center" colspan="4">
	 			No Value Found
	 		</td>
	 		</tr>
	 	<?php 
	 	}

	  ?>

	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

</div>